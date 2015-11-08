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


                        <li><a href="#" data-toggle="modal"
                               data-target=".cityModal">{{$GeoCity->name}} <i class=" icon-map"></i></a></li>

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


<div class="modal cityModal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Выберите свой регион</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">

                        <div style="clear:both"></div>
                        <div class="col-sm-12 no-padding">


                            <select id="country_id" name="country_id"
                                    class="form-control selecter">
                                <option selected disabled>Выберите область ...</option>
                                @foreach($countryList as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>


                            <select class="form-control selecter" id="region-state"
                                    name="region-state" tabindex="-1">
                                @foreach($cityList as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div style="clear:both"></div>
                        <hr class="hr-thin">
                    </div>
                    <div class="col-md-4">
                        <ul class="list-link list-unstyled">
                            <li><a href="category.html#" title="">All Cities</a></li>
                            <li><a href="category.html#" title="Albany">Albany</a></li>
                            <li><a href="category.html#" title="Altamont">Altamont</a></li>
                            <li><a href="category.html#" title="Amagansett">Amagansett</a></li>
                            <li><a href="category.html#" title="Amawalk">Amawalk</a></li>
                            <li><a href="category.html#" title="Bellport">Bellport</a></li>
                            <li><a href="category.html#" title="Centereach">Centereach</a></li>
                            <li><a href="category.html#" title="Chappaqua">Chappaqua</a></li>
                            <li><a href="category.html#" title="East Elmhurst">East Elmhurst</a></li>
                            <li><a href="category.html#" title="East Greenbush">East Greenbush</a></li>
                            <li><a href="category.html#" title="East Meadow">East Meadow</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-link list-unstyled">
                            <li><a href="category.html#" title="Elmont">Elmont</a></li>
                            <li><a href="category.html#" title="Elmsford">Elmsford</a></li>
                            <li><a href="category.html#" title="Farmingville">Farmingville</a></li>
                            <li><a href="category.html#" title="Floral Park">Floral Park</a></li>
                            <li><a href="category.html#" title="Flushing">Flushing</a></li>
                            <li><a href="category.html#" title="Fonda">Fonda</a></li>
                            <li><a href="category.html#" title="Freeport">Freeport</a></li>
                            <li><a href="category.html#" title="Fresh Meadows">Fresh Meadows</a></li>
                            <li><a href="category.html#" title="Fultonville">Fultonville</a></li>
                            <li><a href="category.html#" title="Gansevoort">Gansevoort</a></li>
                            <li><a href="category.html#" title="Garden City">Garden City</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-link list-unstyled">
                            <li><a href="category.html#" title="Oceanside">Oceanside</a></li>
                            <li><a href="category.html#" title="Orangeburg">Orangeburg</a></li>
                            <li><a href="category.html#" title="Orient">Orient</a></li>
                            <li><a href="category.html#" title="Ozone Park">Ozone Park</a></li>
                            <li><a href="category.html#" title="Palatine Bridge">Palatine Bridge</a></li>
                            <li><a href="category.html#" title="Patterson">Patterson</a></li>
                            <li><a href="category.html#" title="Pearl River">Pearl River</a></li>
                            <li><a href="category.html#" title="Peekskill">Peekskill</a></li>
                            <li><a href="category.html#" title="Pelham">Pelham</a></li>
                            <li><a href="category.html#" title="Penn Yan">Penn Yan</a></li>
                            <li><a href="category.html#" title="Peru">Peru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
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
