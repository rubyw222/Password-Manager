@extends('layouts.master')

@section('content')

	<div>
		<!-- edit form -->
		{{ Form::model($record, array('method' => 'PUT', 'route' => array('record.update', $record->id), 'role' => 'form', 'class' => 'form-horizontal')) }}
			<div class="row">
				<div class="form-group">
					{{ Form::label('description', 'Description', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6">
						{{ Form::text('description', NULL, array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					{{ Form::label('URL', 'URL', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::text('URL', NULL, array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					{{ Form::label('username', 'Username', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::text('username', NULL, array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					{{ Form::label('password', 'Password', array('class' =>'control-label col-sm-2')) }}
					<div class="col-sm-10 col-md-6"> 
						{{ Form::text('password', NULL, array('class' => 'form-control')) }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
					</div>
				</div>
			</div>
			
		{{ Form::close() }}
	</div>
	
@stop