@extends('layouts.master')

	@section('content')
		<h3>Add a New List</h3>

		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['url' => 'lists']) !!}
			<div class="form-group">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
			</div>


			<div class="form-group">
				{!! Form::submit('Add New Contact List', ['class' => 'form-control btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}


		<div class="row">
			<div class="col-m-d-9">
				<h5>All Lists</h5>
				@if(count($groups) > 0)
				<ul>
					@foreach($groups as $group)
						<li>{{$group->name}} <a href="lists/edit/{{$group->id}}" class="">Edit</a> <a href="lists/delete/{{$group->id}}">Delete</a></li>
					@endforeach
				</ul>
			@endif

			</div>
		</div>
	@stop