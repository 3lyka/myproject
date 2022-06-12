@extends('layouts.app')

@section('content')
<section class="hi-user mt-5 shadow">
	<div class="container p-3">
		<div class="row">
			<h1>Привет</h1>
			<p class="col-md-3">
				Здесь я соберу некоторые моменты своей работы, потому что я считаю что так правильно
			</p>
			<p class="col-md-3">
				Внизу будут кнопки, можно нажать и посмотреть какие были тестовые задания
			</p>
			<p class="col-md-3">
				Если вы увидете здесь странное форматирование, забейте, мне удобно с табуляцией "6"
			</p>
			<p class="col-md-3">
				И да, я собрал собственную сборку, так что нечего удивлятся
			</p>
			<h1 class="col-md-12 mt-5">
				Стек технологий который будет тута
			</h1>
			<ul>
				<li>
					Bootstrap
				</li>
				<li>
					Vue.js (Буду изучать максимально, там SPA можно делать)
				</li>
				<li>
					Laravel
				</li>
				<li>
					SaSS (потому что нравится)
				</li>
			</ul>

		</div>
	</div>
</section>
<section class="mt-5 shadow">
	<div class="container p-3">
		<div class="row">
			<ul class="col-md-3 list-group">
				<li class="list-item">
					<a href="{{ route ('product.index') }}" class="text-decoration-none">Первое тестовое задание</a>

				</li>
				<li class="list-item">
					<button class="btn">Popup тестового</button>
				</li>
			</ul>
			<ul class="col-md-3">
				<li class="list-item">
					<a href="#">Второе тестовое задание</a>
				</li>
				<li class="list-item">
					<button class="btn">Popup тестового</button>
				</li>
			</ul>
			<ul class="col-md-3">
				<li class="list-item">
					<a href="#">Третье тестовое задание</a>
				</li>
				<li class="list-item">
					<button class="btn">Popup тестового</button>
				</li>
			</ul>
			<ul class="col-md-3 list-group">
				<li class="list-item">
					<a href="#">Четвертое тестовое задание</a>
				</li>
				<li class="list-item">
					<button class="btn">Popup тестового</button>
				</li>
			</ul>
		</div>
	</div>
</section>
@endsection