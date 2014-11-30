@extends('layouts.master')

@section('content')
	
	<script type="text/javascript">
	
		$(document).ready(function() {
			$('.pwdtxt').hide();
			$('.hiddenpwd').show();
		});
		
		function showPassword(id) {
			$('#pwdtxt_'+id).show();
			$('#hiddenpwd_'+id).hide();
			$('#showpwd_'+id).prop('disabled', true);
		};
	
	</script>

	<p><a href="{{ URL::route('record.create') }}" class="btn btn-primary">Create new record</a></p>
    
	<!-- if passwords present in DB then display table of data -->
	@if (count($passwords))
		<div class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Description</th>
					<th>URL</th>
					<th>Username</th>
					<th>Password</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				@foreach ($passwords as $password)
					<tr id="{{$password['id']}}">
						<td>{{$password['id']}}</td>
						<td>{{$password['description']}}</td>
						<td>{{$password['URL']}}</td>
						<td>{{$password['username']}}</td>
						<td>
							<span class="hiddenpws" id="hiddenpwd_{{$password['id']}}">******</span>
							<span class="pwdtxt" id="pwdtxt_{{$password['id']}}">{{$password['password']}}</span>
						</td>
						<td><button class="btn btn-default" onClick="showPassword({{$password['id']}});" id="showpwd_{{$password['id']}}">Show</button></td>
						<td><a href="{{ URL::route('record.edit', $password['id']) }}" class="btn btn-default">Edit</a></td>
						<td>
							{{ Form::model($password, array('method' => 'DELETE', 'route' => array('record.destroy', $password->id))) }}
								{{ Form::submit('Delete', array('class' => 'btn btn-default')) }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	@else
		<p>There are currently no passwords stored in the password manager, why don't you <a href="{{ URL::route('record.create') }}">create</a> one?</p>
	@endif
	
@stop