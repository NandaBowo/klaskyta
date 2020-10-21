<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://www.streamscheme.com/wp-content/uploads/2020/04/pepega.png">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/cover.css')}}">
	@yield('link')
	@yield('style')

</head>
<body>

	<!-- content -->
	@include('layouts.navbar')
	@include('layouts.carousel')
	@include('layouts.footer')
	<!-- endContent -->
	
	<!-- Script -->
	<script src="{{asset('/assets/jquery/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	@yield('script')
	<!-- endScript -->

</body>
</html>
