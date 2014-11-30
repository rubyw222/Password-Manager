@extends('layouts.master')

@section('content')

	<div>
		<!-- login form -->
		{{ Form::open(array('url' => 'login', 'role' => 'form', 'class' => 'form-horizontal')) }}
			<div class="row">
				<div class="form-group">
					{{ Form::label('email', 'Email Address', array('class' => 'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group">
					{{ Form::label('password', 'Password', array('class' => 'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="form-group">
					<div class="col-xs-offset-2 col-xs-10">
						{{ Form::submit('Login', array('class' => 'btn btn-primary')) }}
					</div>
				</div>
			</div>
		{{ Form::close() }}
	</div>
	
@stop
