@extends('layouts.master')

	@section('content')
		<h3>Add New Contact</h3>

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

					{!! Form::open(['url' => 'contacts']) !!}
						<div class="form-group">
							{!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
						</div>

						<div class="form-group">
							{!! Form::input('number','age', null, ['class' => 'form-control', 'placeholder' => 'Age']) !!}
						</div>
						<div class="form-group">
							{!! Form::select('sex', $sex, ['class' => 'form-control', 'placeholder' => 'Sex']) !!}
						</div>
						<div class="form-group">
							{!! Form::input('email','email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
						</div>
						<div class="form-group">
							{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone']) !!}
						</div>
						<div class="form-group">
							{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Address', 'rows' => 3]) !!}
						</div>
						<div class="form-group" id="lists">
								<select name="list_id[]" id="" class="form-control">
									@foreach($lists as $list)
										<option value="{{$list->id}}">{{$list->name}}</option>
									@endforeach
								</select>
								<a id="add_list">Add Contact to More lists</a>
						</div>
						<div id="more-lists"></div>



						<div class="form-group">
							{!! Form::submit('Add New Contact', ['class' => 'form-control btn btn-primary']) !!}
						</div>

					{!! Form::close() !!}

				@if(count($contacts) > 0)
					<h3>All Contacts</h3>

					<table class="table table-striped">
						<thead>
							<th>Name</th>
							<th>Age</th>
							<th>Address</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Actions</th>
						</thead>
						<tbody>
						@foreach($contacts as $contact)
							<tr>
								<td>
									{{$contact->first_name}} {{$contact->last_name}}
								</td>
								<td>
									{{$contact->age}}
								</td>
								<td>
									{{$contact->address}}
								</td>
								<td>
									{{$contact->email}}
								</td>
								<td>
									{{$contact->phone}}
								</td>
								<td>
									<a href="contacts/edit/{{$contact->id}}" class="btn btn-xs btn-warning">Edit</a>
									<a href="contacts/delete/{{$contact->id}}" class="btn btn-xs btn-danger">Delete</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>

			@endif

			</div>
		</div>

	@stop