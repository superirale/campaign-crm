@extends('layouts.master')

	@section('content')
		<h3>Edit {{$contact->first_name}} {{$contact->last_name}}</h3>

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

					{!! Form::open(['action' => ['ContactsController@update', $contact->id]]) !!}
						<div class="form-group">
							{!! Form::text('first_name', $contact->first_name, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('last_name', $contact->last_name, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
						</div>

						<div class="form-group">
							{!! Form::input('number','age', $contact->age, ['class' => 'form-control', 'placeholder' => 'Age']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('sex', $sex, ['class' => 'form-control', 'placeholder' => 'Sex']) !!}
						</div>
						<div class="form-group">
							{!! Form::email('email', $contact->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('phone', $contact->phone, ['class' => 'form-control', 'placeholder' => 'Phone']) !!}
						</div>
						<div class="form-group">
							{!! Form::textarea('address', $contact->address, ['class' => 'form-control', 'placeholder' => 'Address', 'rows' => 3]) !!}
						</div>
						<div class="form-group" id="lists">
								@foreach($contact->contactgroup as $cg)
									<select name="list_id[]" id="" class="form-control">
										<option value="{{$cg->group_id}}">{{$cg->group->name}}</option>
										@foreach($lists as $list)
											<option value="{{$list->id}}">{{$list->name}}</option>
										@endforeach
									</select>
								@endforeach
								<a id="add_list">Add Contact to More lists</a>
						</div>
						<div id="more-lists"></div>


						<div class="form-group">
							{!! Form::submit('Add New Contact', ['class' => 'form-control btn btn-primary']) !!}
						</div>

					{!! Form::close() !!}



			</div>
		</div>

	@stop