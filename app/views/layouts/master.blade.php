<!DOCTYPE html>
<html>
	<head>
		<title>@section('title')
            Password Manager
			@if (!empty($title))
				 | {{$title}}
			@endif
        @show</title>
	</head>
	<body>
		<!-- if user is logged in, show logout link -->
		@if(Auth::check())
			<a href="{{ URL::to('logout') }}">Logout</a>
		@endif
		
		<div class="container">
			<h1>Password Manager @if (!empty($title)) | {{$title}} @endif</h1>
			
			<!-- display messages if they're set -->
			@if(Session::has('flash_notice') || Session::has('flash_error'))
				<div id="flash_notice">{{ Session::get('flash_notice') }}</div>
			@endif
			
			<!-- display errors if there are any -->
			@if ($errors->has())
				<div>
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