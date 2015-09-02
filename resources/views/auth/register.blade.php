@extends('layouts.app')

@section('main')






    <div class="main-container">


        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal" role="form" method="POST"
                                      action="{{ url('/auth/register') }}">


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


                                    <fieldset>

                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">First Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="name" value="{{old('name')}}" placeholder="First Name"
                                                       class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Last Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="lastname" value="{{old('lastname')}}"
                                                       placeholder="Last Name"
                                                       class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label class="col-md-4 control-label">Phone Number <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input name="phone" value="{{old('phone')}}" placeholder="Phone Number"
                                                       class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Gender</label>

                                            <div class="col-md-6">
                                                <div class="radio">
                                                    <label for="Gender-0">
                                                        <input name="gender" id="Gender-0" value="0" checked="checked"
                                                               type="radio">
                                                        Male </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="Gender-1">
                                                        <input name="gender" id="Gender-1" value="1" type="radio">
                                                        Female </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label for="inputEmail3" class="col-md-4 control-label">Email
                                                <sup>*</sup></label>

                                            <div class="col-md-6">
                                                <input type="email" class="form-control" name="email"
                                                       value="{{old('email')}}"
                                                       placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <label for="password" class="col-md-4 control-label">Password </label>

                                            <div class="col-md-6">
                                                <input type="password" name="password" class="form-control"
                                                       placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <label for="password_confirmation" class="col-md-4 control-label">Password
                                                confirmation </label>

                                            <div class="col-md-6">
                                                <input type="password" name="password_confirmation" class="form-control"
                                                       required placeholder="Password">

                                                <p class="help-block">At least 6 characters </p>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-4 control-label"></label>

                                            <div class="col-md-8">
                                                <div class="termbox mb10">
                                                    <label class="checkbox-inline" for="terms">
                                                        <input name="terms" value="1" type="checkbox">
                                                        I have read and agree to the <a href="terms-conditions.html">Terms
                                                            &amp; Conditions</a> </label>
                                                </div>
                                                <div style="clear:both"></div>

                                                {!! csrf_field() !!}
                                                <button class="btn btn-primary" type="submit">Register</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Post a Free Classified</strong></h3>

                            <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. </p>
                        </div>
                        <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                            <h3><strong>Create and Manage Items</strong></h3>

                            <p> Nam sit amet dui vel orci venenatis ullamcorper eget in lacus.
                                Praesent tristique elit pharetra magna efficitur laoreet.</p>
                        </div>
                        <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                            <h3><strong>Create your Favorite ads list.</strong></h3>

                            <p> PostNullam quis orci ut ipsum mollis malesuada varius eget metus.
                                Nulla aliquet dui sed quam iaculis, ut finibus massa tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
