<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang</title>
	<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
	<link href="{{asset('/assets/bootstrap/css/cover.css')}}" rel="stylesheet">
	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
</head>
<body class="text-center">
	<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
		<header class="masthead mb-auto">
			<div class="inner">
				<h3 class="masthead-brand text-success">Klas<span class="text-primary">Kyta</span></h3>
				<nav class="nav nav-masthead justify-content-center">
					<a class="nav-link text-primary" href="#">Login</a>
					<a class="nav-link text-success" href="#">Register</a>
				</nav>
			</div>
		</header>

		<main role="main" class="inner cover">
			<h1 class="cover-heading"><span class="text-success">Klas</span><span class="text-primary">Kyta</span></h1>
			<p class="lead">Aplikasi berbasis website untuk pengelolaan kelas</p>
			<p class="lead">
				<a href="#" class="btn btn-lg btn-primary">Login</a>
				<a href="#" class="btn btn-lg btn-success">Register</a>
			</p>
		</main>

		<footer class="mastfoot mt-auto">
			<div class="inner">
				<p><span class="text-success">Klas</span><span class="text-primary">Kyta</span> by Nanda D. Cahyo</p>
			</div>
		</footer>
	</div>
	<script src="{{asset('/assets/jquery/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>