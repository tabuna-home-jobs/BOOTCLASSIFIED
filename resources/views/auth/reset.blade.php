@extends('_layouts.auth')

@section('content')


    <div class="container w-xxl w-auto-xs">
        <a href="/" class="navbar-brand block m-t">Mautab</a>

        <div class="m-b-lg">
            <div class="wrapper text-center">
                <strong>Востановить доступ к панели управления</strong>
            </div>


            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form name="form" role="form" method="POST" action="{{ url('/password/reset') }}" class="form-validation">
                <div class="text-danger wrapper text-center" ng-show="authError">

                </div>
                <div class="list-group list-group-sm">
                    <div class="list-group-item">
                        <input type="email" placeholder="Email"
                               name="email" value="{{ old('email') }}" class="form-control no-border" required>
                    </div>
                    <div class="list-group-item">
                        <input type="password" placeholder="Password"
                               name="password" class="form-control no-border" required>
                    </div>
                    <div class="list-group-item">
                        <input type="password" placeholder="Confirm Password"
                               name="password_confirmation" class="form-control no-border" required>
                    </div>


                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Востанновить</button>
                <div class="text-center m-t m-b"><a href="{{ url('/auth/login') }}">Я вспомнил пароль?</a></div>
                <div class="line line-dashed"></div>
                <p class="text-center">
                    <small>У вас нет аккаунта?</small>
                </p>
                <a href="{{ url('/auth/register') }}" class="btn btn-lg btn-default btn-block">Зарегистрироваться</a>
            </form>
        </div>
        <div class="text-center">
            <p>
                <small class="text-muted">Mautab &copy; 2015</small>
            </p>
        </div>
    </div>


@endsection




























@extends('layouts.app')

@section('main')




    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 login-box">
                    <div class="panel panel-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title">

                                <span class="logo-icon"><i
                                            class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span> BOOT<span>CLASSIFIED </span>
                            </h2>
                        </div>
                        <div class="panel-body">


                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form role="form" method="POST" action="{{ url('/password/reset') }}">
                                <div class="form-group">
                                    <label for="sender-email" class="control-label">Email:</label>

                                    <div class="input-icon"><i class="icon-user fa"></i>
                                        <input type="email" placeholder="Email"
                                               name="email" value="{{ old('email') }}" required
                                               class="form-control email">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="user-pass" class="control-label">Password:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Password" required=>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="user-pass" class="control-label">Confirm Password:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                        <input type="password" placeholder="Confirm Password"
                                               name="password_confirmation" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Send me my password
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <p class="text-center "><a href="{{url('auth/login')}}"> Back to Login </a></p>

                            <div style=" clear:both"></div>
                        </div>
                    </div>
                    <div class="login-box-btm text-center">
                        <p> Don't have an account? <br>
                            <a href="{{url('auth/register')}}"><strong>Sign Up !</strong> </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


