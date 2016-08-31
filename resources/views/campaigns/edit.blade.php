@extends('layouts.master')

	@section('content')
		<h3>Edit {{$campaign->name}} Campaign</h3>

		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		<div class="row">

			@extends('layouts.sidebar')

			<div class="col-m-d-9">

					{!! Form::open(['action' => ['CampaignsController@update', $campaign->id]]) !!}
						<div class="form-group">
							{!! Form::text('name', $campaign->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('type', $campaign->type, ['class' => 'form-control', 'placeholder' => 'Campaign Type']) !!}
						</div>
						<div class="form-group">
							{!! Form::date('scheduled_date', $campaign->scheduled_date, ['class' => 'form-control', 'placeholder' => 'Scheduled Date']) !!}
						</div>

						<div class="form-group">
							{!! Form::textarea('message', $campaign->message, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => 3]) !!}
						</div>
						<div class="form-group" id="lists">
						@foreach($campaign->campaigncontactgroup as $cg)
									<select name="list_id[]" id="" class="form-control">
										<option value="{{$cg->group_id}}">{{$cg->group->name}}</option>
										@foreach($lists as $list)
											<option value="{{$list->id}}">{{$list->name}}</option>
										@endforeach
									</select>
								@endforeach

							<a id="add_list">Add More Contact lists</a>
						</div>
						<div id="more-lists"></div>

						<div class="form-group">
							{!! Form::submit('Add New Contact', ['class' => 'form-control btn btn-primary']) !!}
						</div>

					{!! Form::close() !!}


			</div>
		</div>

	@stop