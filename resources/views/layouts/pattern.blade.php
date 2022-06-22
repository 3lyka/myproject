<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset=" UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/swiper-bundle.css') }}">
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
									<a class="nav-link fw-bold" href="{{ route ('shop.index') }}">Главная</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route ('product.index') }}">Каталог</a>
								</li>

								<li class="nav-item">
									<a class="nav-link disabled" href="#">Контакты</a>
								</li>
								<!-- Данным методом мы проверяем пользователя на вшивость, если он залогинен, то он видит строку, если нет, то нет -->
								@can('view', auth()->user()) 
								<li class="nav-item">
									<a class="nav-link" href="{{ route('admin.index') }}">Admin panel</a>
								</li>
								@endcan

							</ul>
							<a href="#"><img src="data:image/png;base64,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" /></a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>

	@yield('content')
	<script src="{{ asset('/js/swiper-bundle.js') }}"></script>
	<script src="{{ asset('/js/slider.js') }}"></script>
	<script src="{{ mix('/js/app.js') }}"></script>
	<section>
		<div class="container">
			<div class="row">
				<footer>

				</footer>
				<div class="text-dark">
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