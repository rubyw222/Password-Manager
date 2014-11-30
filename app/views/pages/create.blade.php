@extends('layouts.master')

@section('content')

	<div>
		<!-- create form -->
		{{ Form::open(array('route' => 'record.store', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal')) }}
			<div class="row">
				<div class="form-group">
					{{ Form::label('description', 'Description', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6">
						{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					{{ Form::label('url', 'URL', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::text('url', Input::old('url'), array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					{{ Form::label('username', 'Username', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					{{ Form::label('password', 'Password', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::password('password', array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-xs-offset-2 col-xs-10">
						{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
					</div>
				</div>
			</div>
			
		{{ Form::close() }}
	</div>
	
@stop