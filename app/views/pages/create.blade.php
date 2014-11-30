@extends('layouts.master')

@section('content')

	<div>
		<!-- create form -->
		{{ Form::open(array('route' => 'record.store', 'method' => 'POST')) }}
			<p>{{ Form::label('description', 'Description') }}
			{{ Form::text('description', Input::old('description')) }}</p>
			
			<p>{{ Form::label('url', 'URL') }}
			{{ Form::text('url', Input::old('url')) }}</p>
			
			<p>{{ Form::label('username', 'Username') }}
			{{ Form::text('username', Input::old('username')) }}</p>
			
			<p>{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}</p>
			
			<p>{{ Form::submit('Submit') }}</p>
		{{ Form::close() }}
	</div>
	
@stop