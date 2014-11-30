<!DOCTYPE html>
<html>
	<head>
		<title>@section('title')
            Password Manager
			@if (!empty($title))
				 | {{$title}}
			@endif
        @show</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
		<script src="/assets/js/bootstrap.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>
	<body>
		<!-- if user is logged in, show logout link -->
		@if(Auth::check())
			<nav class="navbar navbar-default" role="navigation">
				<a href="{{ URL::to('passwords') }}" class="btn btn-default navbar-btn">View all passwords</a>
				<a href="{{ URL::to('logout') }}" class="btn btn-default navbar-btn">Logout</a>
			</nav>
		@endif
		
		<div class="container">
			<h1>Password Manager @if (!empty($title)) | {{$title}} @endif</h1>
			
			<!-- display messages if they're set -->
			@if(Session::has('flash_notice') || Session::has('flash_error'))
				<div class="alert alert-info alert-dismissable" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					{{ Session::get('flash_notice') }}
				</div>
			@endif
			
			<!-- display errors if there are any -->
			@if ($errors->has())
				<div class="alert alert-danger alert-dismissable" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif			
		
            @yield('content')
        </div>
		
	</body>
</html>