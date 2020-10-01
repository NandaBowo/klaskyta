<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css')}}">
	@yield('link')
	@yield('style')
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
			<a class="navbar-brand" href="#"><span class="text-success">Klas</span><span class="text-primary">Kyta</span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="absensiDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Absensi Kelas
						</a>
						<div class="dropdown-menu" aria-labelledby="absensiDrop">
							<a class="dropdown-item" href="#">Input Absensi</a>
							<a class="dropdown-item" href="#">Cek Absensi</a>
							<a class="dropdown-item" href="#">Rekap Absensi</a>
                                                        <a class="dropdown-item" href="#">Hapus Absensi</a>
						</div>





					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="userDrop" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							(user)
						</a>
						<div class="dropdown-menu" aria-labelledby="userDrop">
							<a class="dropdown-item" href="#">Setting</a>
							<a class="dropdown-item" href="#">Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		@yield('content')
	</div>
	<script src="{{asset('/assets/jquery/jquery-3.4.1.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	@yield('script')
</body>
</html>
