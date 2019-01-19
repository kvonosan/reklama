<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Сайт бесплатной рекламы.</title>

    <!-- Bootstrap 
	column reklama = 88 symbols; image = 200x200px
	asw1 reklama = 138 symbols; image = 400x300px
	-->
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/site.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  </head>
  <body>
	<div class="container-fluid">
		<header class="header-bs">
			<div class="row">
				<div class="col-md-12 reklama-block">
					<div class="col-md-1 col-sm-2 col-xs-6">
                                            <a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 reklama-block">
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 reklama-block">
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="col-md-1 col-sm-2 col-xs-6">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw1.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
				</div>
			</div>
			
			<nav class="navbar navbar-default navbar-static-top">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Переключатель навигации</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="/">reklama.peshkova-natalia.ru</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="/">Главная</a></li>
					<!--li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					  </ul>
					</li-->
				  </ul>
				  <!--form class="navbar-form navbar-left">
					<div class="form-group">
					  <input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				  </form-->
				  <ul class="nav navbar-nav navbar-right">
                                    @if (Auth::guest())
                                        <li><a href="{{ route('reklama.add')}}">Добавить рекламу</a></li>
                                        <li><a href="{{ route('login') }}">Войти</a></li>
                                        <li><a href="{{ route('register') }}">Регистрация</a></li>
                                    @else
                                        <li><a href="{{ route('reklama.add')}}">Добавить рекламу</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        Выйти
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>
		<div class="container-fluid">
			<div class="row border">
				<div class="col-md-4 col-xs-12">
					<div class="row reklama-banner">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" class="img-responsive" src="{{ URL::asset('img/asw2.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
                                                </a>
					</div>
					<div class="row reklama-banner">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" class="img-responsive" src="{{ URL::asset('img/asw2.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="row reklama-banner">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw2.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="row reklama-banner">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw2.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="row reklama-banner">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw2.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
					<div class="row reklama-banner">
						<a href="javascript:void(0)" onclick="email();">
							<div>
								<image class="img-responsive" src="{{ URL::asset('img/asw2.jpg') }}"></image>
							</div>
							<div>
								Здесь может быть ваша реклама! <br> Стоимость 50 рублей в месяц.
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-8 col-xs-12 content">
                                    @yield('content')
				</div>
                                <div id="myModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Внимание!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Необходимо <a href="{{route('login')}}">войти</a> или <a href="{{route('register')}}">зарегистрироваться</a> чтобы лайкать рекламу.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" onclick="window.location.href = '{{route('login')}}';" class="btn btn-primary">Войти</button>
                                                <button type="button" onclick="window.location.href = '{{route('register')}}';" class="btn btn-primary">Зарегистрироваться</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="myModal1" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Внимание!</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Напишите на kvonosan@rambler.ru для заказа рекламы.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
			</div>
		</div>
		<!----------- Footer ------------>
		<footer class="footer-bs">
			<div class="row">
				<div class="col-md-5 footer-brand animated fadeInLeft">
					<h2>reklama.peshkova-natalia.ru</h2>
					<p>Сайт бесплатной рекламы. Бесплатная реклама.
                                            Реклама. Подать рекламу. Бесплатная реклама на сайте. Реклама на сайте.
                                            Рекламировать. Рекламировать сайт. Подать объявление. Сайт рекламы.
                                            Сайт объявлений. Разместить рекламу. Разместить рекламу бесплатно.
                                            Бесплатно разместирть рекламу. Разместить объявление. Бесплатно
                                            разместить объявление. Раскрутить сайт. Рекламировать. Бесплатно
                                            рекламировать.</p>
                                        <p><b>Чтобы реклама корректно отображалась отключите AdBlock!</b></p>
					<p>© 2017 reklama.peshkova-natalia.ru, все права защищены.</p>
                                        <p><b>Время сайта: {{Carbon\Carbon::now()->toTimeString()}}</b></p>
                                        <p>Чтобы добавить платную рекламу свяжитесь с kvonosan@rambler.ru</p>
				</div>
				<div class="col-md-4 footer-nav animated fadeInUp">
					<h4>Меню —</h4>
					<div class="col-md-6">
						<ul class="pages">
							<li><a href="/">Главная</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul class="list">
							<li><a href="{{ route('reklama.add')}}">Добавить рекламу</a></li>
                                                        @if (Auth::guest())
                                                        <li><a href="{{ route('login')}}">Войти</a></li>
                                                        <li><a href="{{ route('register')}}">Зарегистрироваться</a></li>
                                                        @endif
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-ns animated fadeInRight">
					<h4>Новости</h4>
					<p>22:10 12.03.2017 Добавлен домен reklama.peshkova-natalia.ru!</p>
					<p>
						<!--div class="input-group">
						  <input type="text" class="form-control" placeholder="Search for...">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
						  </span>
						</div-->
					 </p>
                                         <p><a href="http://computer.peshkova-natalia.ru/">Блог о компьютерах</a></p>
                                         <p><a HREF=""></a></p>
				</div>
			</div>
		</footer>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter43415419 = new Ya.Metrika({
                        id:43415419,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/43415419" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <script>
    function count(name, button_type, id, content)
    {
        if ($('#dislike'+id).attr("onclick").indexOf('cancel') >-1)
        {
            alert('Отмените Не нравится сначала!');
        } else if ($('#like'+id).attr("onclick").indexOf('cancel') >-1)
        {
            alert('Отмените Нравится сначала!');
        } else
        {
            $.ajax({
                method: "GET",
                url: "/count",
                data: 'type=' + button_type+ '&id=' + id + '&content=' +content,
                success: function(data) {
                    if (button_type == 'like')
                    {
                        $('#' + name).html('<img class="img-responsive" src="img/like.jpg")></img>Нравится: ' + data);
                        $('#' + name).attr("onclick","cancel(\"" + name + "\",\"" + button_type +
                                "\"," + id + "," + content + ")");
                    } else
                    {
                        $('#' + name).html('<img class="img-responsive" src="img/dislike.jpg")></img>Не нравится: ' + data);
                        $('#' + name).attr("onclick","cancel(\"" + name + "\",\"" + button_type +
                                "\"," + id + "," + content + ")");
                    }
                }
            });
        }
    }
    
    function cancel(name, button_type, id, content)
    {
        $.ajax({
            method: "GET",
            url: "/count",
            data: 'type=' + button_type+ '&id=' + id + '&content=' +content + "&cancel=1",
            success: function(data) {
                if (button_type == 'like')
                {
                    $('#' + name).html('Нравится: ' + data);
                    $('#' + name).attr("onclick","count(\"" + name + "\",\"" + button_type +
                            "\"," + id + "," + content + ")");
                } else
                {
                    $('#' + name).html('Не нравится: ' + data);
                    $('#' + name).attr("onclick","count(\"" + name + "\",\"" + button_type +
                            "\"," + id + "," + content + ")");
                }
            }
        });
    }
    
    function not_login()
    {
        $("#myModal").modal('show');
    }
    
    function email()
    {
        $("#myModal1").modal('show');
    }
    </script>
  </body>
</html>
