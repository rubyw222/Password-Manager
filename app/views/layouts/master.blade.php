<!DOCTYPE html>
<html>
	<head>
		<title>@section('title')
            Password Manager
        @show</title>
	</head>
	<body>
		@if(Auth::check())
			<a href="{{ URL::to('logout') }}">Logout</a>
		@endif
		
		@if(Session::has('flash_notice') || Session::has('flash_error'))
            <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
        @endif
		
		<div class="container">
            @yield('content')
        </div>
	</body>
</html>