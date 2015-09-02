@extends('layouts.app')

@section('main')




    <div class="intro">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Find Classified Ads </h1>

                    <p class="sub animateme fittext3 animated fadeIn"> Find local classified ads on bootclassified in
                        Minutes </p>

                    <div class="row search-row animated fadeInUp">
                        <div class="col-lg-4 col-sm-4 search-col relative locationicon">
                            <i class="icon-location-2 icon-append"></i>
                            <input type="text" name="country" id="autocomplete-ajax"
                                   class="form-control locinput input-rel searchtag-input has-icon"
                                   placeholder="City/Zipcode..." value="" autocomplete="off">
                        </div>
                        <div class="col-lg-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                            <input type="text" name="ads" class="form-control has-icon"
                                   placeholder="I'm looking for a ..." value="">
                        </div>
                        <div class="col-lg-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block"><i
                                        class="icon-search"></i><strong>Find</strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Find Classified Ads World Wide </h2>

                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">

                                @foreach($categoryList[0] as $value)
                                    <div class="cat-list">
                                        <h3 class="cat-title"><a href="{{route('category.show',$value->slug)}}"><i
                                                        class="fa fa-car ln-shadow"></i> {{$value->name}} <span
                                                        class="count">277,959</span> </a>
                                            <span data-target=".cat-id-1" data-toggle="collapse"
                                                  class="btn-cat-collapsed collapsed"> <span
                                                        class=" icon-down-open-big"></span> </span>
                                        </h3>
                                        <ul class="cat-collapse collapse in cat-id-1" style="height: auto;">
                                            @foreach($value->getSubCategory as $subValue)
                                                <li>
                                                    <a href="{{route('category.show',$subValue->slug)}}">{{$subValue->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>


                            <div class="col-md-4 col-sm-4 ">
                                @foreach($categoryList[1] as $value)
                                    <div class="cat-list">
                                        <h3 class="cat-title"><a href="{{route('category.show',$value->slug)}}"><i
                                                        class="fa fa-car ln-shadow"></i> {{$value->name}} <span
                                                        class="count">277,959</span> </a>
                                            <span data-target=".cat-id-1" data-toggle="collapse"
                                                  class="btn-cat-collapsed collapsed"> <span
                                                        class=" icon-down-open-big"></span> </span>
                                        </h3>
                                        <ul class="cat-collapse collapse in cat-id-1" style="height: auto;">
                                            @foreach($value->getSubCategory as $subValue)
                                                <li>
                                                    <a href="{{route('category.show',$subValue->slug)}}">{{$subValue->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>


                            <div class="col-md-4 col-sm-4   last-column">
                                @foreach($categoryList[2] as $value)
                                    <div class="cat-list">
                                        <h3 class="cat-title"><a href="{{route('category.show',$value->slug)}}"><i
                                                        class="fa fa-car ln-shadow"></i> {{$value->name}} <span
                                                        class="count">277,959</span> </a>
                                            <span data-target=".cat-id-1" data-toggle="collapse"
                                                  class="btn-cat-collapsed collapsed"> <span
                                                        class=" icon-down-open-big"></span> </span>
                                        </h3>
                                        <ul class="cat-collapse collapse in cat-id-1" style="height: auto;">
                                            @foreach($value->getSubCategory as $subValue)
                                                <li>
                                                    <a href="{{route('category.show',$subValue->slug)}}">{{$subValue->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-3 page-sidebar col-thin-left">
                    <aside>
                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="#"><img class="img-responsive"
                                                                            src="images/site/app.jpg" alt="tv"></a>
                            </div>
                        </div>
                        <div class="inner-box">
                            <h2 class="title-2">Popular Categories </h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    <li><a href="sub-category-sub-location.html"> Apparel (1,386) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Art (1,163) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Business Opportunities (4,974) </a>
                                    </li>
                                    <li><a href="sub-category-sub-location.html"> Community and Events (1,258) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Electronics and Appliances
                                            (1,578) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Jobs and Employment (3,609) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Motorcycles (968) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Pets (1,188) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Services (7,583) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Vehicles (1,129) </a></li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>



    <div class="page-info" style="background: url(images/bg.jpg); background-size:cover">
        <div class="container text-center section-promo">
            <div class="row">
                <div class="col-sm-3 col-xs-6 col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="icon  icon-group"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>2200</span></h5>

                                <div class="iconbox-wrap-text">Trusted Seller</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="icon  icon-th-large-1"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>100</span></h5>

                                <div class="iconbox-wrap-text">Categories</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-6  col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="icon  icon-map"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>700</span></h5>

                                <div class="iconbox-wrap-text">Location</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="icon icon-facebook"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>50,000</span></h5>

                                <div class="iconbox-wrap-text"> Facebook Fans</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>











@endsection