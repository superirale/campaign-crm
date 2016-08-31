@extends('layouts.master')

	@section('content')
		<h3>Edit {{$group->name}} List</h3>

		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['action' => ['GroupsController@update', $group->id]]) !!}
			<div class="form-group">
				{!! Form::text('name', $group->name, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
			</div>


			<div class="form-group">
				{!! Form::submit('Add New Contact List', ['class' => 'form-control btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}

	@stop