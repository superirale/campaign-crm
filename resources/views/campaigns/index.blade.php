@extends('layouts.master')

	@section('content')
		<h3>Add New Campaign</h3>

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

					{!! Form::open(['url' => 'campaigns']) !!}
						<div class="form-group">
							{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Campaign Type']) !!}
						</div>
						<div class="form-group">
							{!! Form::date('scheduled_date', null, ['class' => 'form-control', 'placeholder' => 'Scheduled Date']) !!}
						</div>

						<div class="form-group">
							{!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => 3]) !!}
						</div>
						<div class="form-group" id="lists">
								<select name="list_id[]" id="" class="form-control">
								<option value="">Add Contact List</option>
									@foreach($lists as $list)
										<option value="{{$list->id}}">{{$list->name}}</option>
									@endforeach
								</select>
								<a id="add_list">Add More Contact lists</a>
						</div>
						<div id="more-lists"></div>

						<div class="form-group">
							{!! Form::submit('Add New Contact', ['class' => 'form-control btn btn-primary']) !!}
						</div>

					{!! Form::close() !!}

				@if(count($campaigns) > 0)
					<h3>All campaigns</h3>

					<table class="table table-striped">
						<thead>
							<th>Name</th>
							<th>Type</th>
							<th>Scheduled Date</th>
							<th>Actions</th>
						</thead>
						<tbody>
						@foreach($campaigns as $campaign)
							<tr>
								<td>
									{{$campaign->name}}
								</td>
								<td>
									{{$campaign->type}}
								</td>
								<td>
									{{$campaign->scheduled_date}}
								</td>

								<td>
									<a href="campaigns/edit/{{$campaign->id}}" class="btn btn-xs btn-warning">Edit</a>
									<a href="campaigns/delete/{{$campaign->id}}" class="btn btn-xs btn-danger">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>

			@endif

			</div>
		</div>

	@stop