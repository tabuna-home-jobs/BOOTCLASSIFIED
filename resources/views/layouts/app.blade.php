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
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>

    <link href="/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <link href="/assets/css/style.css" rel="stylesheet">

    <link href="/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="/assets/css/owl.theme.css" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="/assets/js/pace.min.js"></script>
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

                        <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span>
                        BOOT<span>CLASSIFIED </span> </a></div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">

                        @if(Auth::check())
                            <li><a href="{{url('auth/logout')}}">Выйти <i class="glyphicon glyphicon-off"></i> </a></li>
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span>{{Auth::user()->name}} {{Auth::user()->lastname}}</span> <i
                                            class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
                                <ul class="dropdown-menu user-menu">
                                    <li class="active"><a href="#"><i class="icon-home"></i> Personal Home </a></li>
                                    <li><a href="#"><i class="icon-th-thumb"></i> My ads </a></li>
                                    <li><a href="#"><i class="icon-heart"></i> Favourite ads </a></li>
                                    <li><a href="#"><i class="icon-star-circled"></i> Saved search </a></li>
                                    <li><a href="#"><i class="icon-folder-close"></i> Archived ads </a></li>
                                    <li><a href="#"><i class="icon-hourglass"></i> Pending approval </a></li>
                                    <li><a href="#"><i class=" icon-money "></i> Payment history </a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ url('/auth/login') }}">Войти</a></li>
                            <li><a href="{{ url('/auth/register') }}">Зарегистрироваться</a></li>
                        @endif

                        <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="#">Post Free
                                Add</a></li>
                    </ul>
                </div>

            </div>

        </nav>
    </div>

    @yield('main')

    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-left navbar-link footer-nav">
                <li><a href="{{ url('/') }}"> Home </a> <a href="#"> About us </a> <a href="#"> Terms and
                        Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a
                            href="faq.html"> FAQ </a>
            </ul>
            <ul class=" pull-right navbar-link footer-nav">
                <li> &copy; 2015 BootClassified</li>
            </ul>
        </div>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script src="/assets/js/owl.carousel.min.js"></script>

<script src="/assets/js/form-validation.js"></script>

<script src="/assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="/assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>

<script src="/assets/js/script.js"></script>
</body>
</html>
