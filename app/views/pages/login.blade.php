@extends('layouts.master')

@title
	@parent
	 | Login
@stop

@section('content')

	<h1>Password Manager | Login</h1>
	<div>
		{{ Form::open(array('url' => 'login')) }}
			<p>{{ Form::label('email', 'E-Mail Address') }}
			{{ Form::email('email', Input::old('email')) }}</p>
			
			<p>{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}</p>
			
			<p>{{ Form::submit('Log in') }}</p>
		{{ Form::close() }}
	</div>
	
@stop
