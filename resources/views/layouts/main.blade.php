<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	@yield('content')
	<script src="{{asset('/assets/jquery/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>