<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">
    <title>Доска Объявлений</title>

    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="/assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <div class="header">
        <nav class="navbar navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="{{ url('/') }}" class="navbar-brand logo logo-title">

                        <span class="logo-icon"><i class="fa fa-search ln-shadow-logo shape-0"></i> </span>
                        Доска<span>Объявлений </span> </a></div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">


                        <li><a href="#">{{$GeoCity->name}} <i class=" icon-map"></i></a></li>

                    @if(Auth::check())
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>{{Auth::user()->name}} {{Auth::user()->lastname}}</span> <i
                                            class="fa fa-user"></i></a>
                                <ul class="dropdown-menu user-menu">
                                    <li class="active"><a href="{{route('settings.index')}}"><i class="fa fa-home"></i>
                                            Профиль </a></li>
                                    <li><a href="#"><i class="fa fa-th-large"></i> Мои обьявления </a></li>
                                    <li><a href="#"><i class="fa fa-heart"></i> Мне понравилось </a></li>
                                    <li><a href="#"><i class="fa fa-folder"></i> Архив </a></li>
                                    <li><a href="#"><i class="fa fa-money "></i> Платежи </a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('auth/logout')}}"><i class="fa fa-sign-out"></i> Выйти </a></li>

                                </ul>
                            </li>

                            <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger"
                                                   href="{{ route('advertising.create') }}">Подать объявление</a></li>
                        @else
                            <li><a href="{{ url('/auth/login') }}">Войти</a></li>
                            <li><a href="{{ url('/auth/register') }}">Зарегистрироваться</a></li>
                            <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger"
                                                   href="{{ url('/auth/register') }}">Подать объявление</a></li>
                        @endif

                    </ul>
                </div>

            </div>

        </nav>
    </div>

    @yield('main')

    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-left navbar-link footer-nav">
                <li>
                    <a href="{{ url('/') }}"><i class="fa fa-home"></i> Главная </a>
                    <a href="{{ route('about.index') }}"><i class="fa fa-users"></i> О нас </a>
                    <a href="{{ route('about.index') }}"><i class="fa fa-exclamation-triangle"></i> Правила </a>
                    <a href="{{ route('faq.index') }}"><i class="fa fa-life-ring"></i> Помощь </a>
                </li>
            </ul>
            <ul class=" pull-right navbar-link footer-nav">
                <li><i class="fa fa-copyright"></i> 2015 Доска Объявлений</li>
            </ul>
        </div>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/bootstrap/js/jasny-bootstrap.min.js"></script>

<script src="/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="/assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="/assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
    $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager'
    });

    $('.selecter').selecter();

</script>


</body>
</html>
