@extends('layouts.master')

@section('title')
	@parent
	 | List passwords
@stop

@section('content')
    <h1>Password Manager | List passwords</h1>
	
	<!-- if passwords present in DB then display table of data -->
	@if ($passwords)
		<table>
			<tr>
				<th>ID</th>
				<th>description</th>
				<th>URL</th>
				<th>Password</th>
				<th></th>
				<th></th>
			</tr>
			@foreach ($passwords as $password)
				<tr>
					<td>{{$password['id']}}</td>
					<td>{{$password['description']}}</td>
					<td>{{$password['url']}}</td>
					<td>{{$password['password']}}</td>
					<td><a href="#">Edit</a></td>
					<td><a href="#">Delete</a></td>
				</tr>
			@endforeach
		</table>
	@else
		<p>There are currently no passwords stored in the password manager</p>
	@endif
@stop