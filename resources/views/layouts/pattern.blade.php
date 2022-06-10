<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<title>{{ config('app.name', 'myproject') }}</title>
</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg bg-light">
					<div class="container-fluid">
						<a class="navbar-brand" href="{{ route ('shop.index') }}">Представим что магазин</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="{{ route ('welcome') }}">Стартовая страница</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Link</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Dropdown
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li><a class="dropdown-item" href="#">Action</a></li>
										<li><a class="dropdown-item" href="#">Another action</a></li>
										<li>
											<hr class="dropdown-divider">
										</li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
									</ul>
								</li>

							</ul>
							<!-- 							<form class="d-flex" role="search">
								<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form> -->
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>


	@yield('content')
	<script src="{{ asset('js/app.js') }}"></script>
	<section>
		<div class="container">
			<div class="row">
				<footer>

				</footer>
				<div class="text-dark fixed-bottom">
					<script>
						function y2k(number) {
							return (number < 1000) ? number + 1900 : number;
						}
						var today = new Date();
						var year = y2k(today.getYear());
						document.write('My Project © ' + year + ' Devoloper Гараев Вадим');
					</script>
				</div>
			</div>
		</div>
	</section>
</body>

</html>