@extends('layouts.master')

@section('content')

	<div>
		<!-- edit form -->
		{{ Form::model($record, array('method' => 'PUT', 'route' => array('record.update', $record->id))) }}
			<p>{{ Form::label('description', 'Description') }}
			{{ Form::text('description') }}</p>
			
			<p>{{ Form::label('URL', 'URL') }}
			{{ Form::text('URL') }}</p>
			
			<p>{{ Form::label('username', 'Username') }}
			{{ Form::text('username') }}</p>
			
			<p>{{ Form::label('password', 'Password') }}
			{{ Form::text('password') }}</p>
			
			<p>{{ Form::submit('Submit') }}</p>
		{{ Form::close() }}
	</div>
	
@stop