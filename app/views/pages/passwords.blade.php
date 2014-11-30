@extends('layouts.master')

@section('content')

	<a href="{{ URL::to('create') }}">Create new record</a>
    
	<!-- if passwords present in DB then display table of data -->
	@if (count($passwords))
		<table>
			<tr>
				<th>ID</th>
				<th>description</th>
				<th>URL</th>
				<th>Username</th>
				<th>Password</th>
				<th></th>
				<th></th>
			</tr>
			@foreach ($passwords as $password)
				<tr>
					<td>{{$password['id']}}</td>
					<td>{{$password['description']}}</td>
					<td>{{$password['URL']}}</td>
					<td>{{$password['username']}}</td>
					<td>{{$password['password']}}</td>
					<td><a href="URL::to('edit/{{$password['id']}}')">Edit</a></td>
					<td><a href="URL::to('delete/{{$password['id']}}')">Delete</a></td>
				</tr>
			@endforeach
		</table>
	@else
		<p>There are currently no passwords stored in the password manager, why don't you <a href="{{ URL::to('create') }}">create</a> one?</p>
	@endif
	
@stop