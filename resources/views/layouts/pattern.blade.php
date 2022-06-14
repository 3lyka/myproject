<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
	<title>{{ config('app.name', 'myproject') }}</title>
</head>

<body>

	<header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-expand-lg bg-light">
					<div class="container-fluid">
						<a class="navbar-brand fw-bold" href="{{ route ('shop.index') }}">Shop</a>
						<button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

							<img class="navbar-toggler-icon" src="https://lun-eu.icons8.com/a/j08GR3CEbkynS3xBTTQ4nA/RGOgpmBW6kqcisgjwQqTbA/id%3D82486_format%3Dpng.png" />
						</button>
						<div class="collapse navbar-collapse navbar__menu" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="{{ route ('welcome') }}">Стартовая страница</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route ('product.index') }}">Каталог</a>
								</li>

								<li class="nav-item">
									<a class="nav-link disabled" href="#">Контакты</a>
								</li>
							</ul>
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