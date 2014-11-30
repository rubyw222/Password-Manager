@extends('layouts.master')

@section('content')

	<div>
		<!-- login form -->
		{{ Form::open(array('url' => 'login')) }}
			<p>{{ Form::label('email', 'E-Mail Address') }}
			{{ Form::email('email', Input::old('email')) }}</p>
			
			<p>{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}</p>
			
			<p>{{ Form::submit('Log in') }}</p>
		{{ Form::close() }}
	</div>
	
@stop
