@extends('layouts.app')

@section('main')


    <div class="intro">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown"> Доска Объявлений </h1>

                    <p class="sub animateme fittext3 animated fadeIn"> Найдите объявление в своем городе
                        за пару минут </p>

                    <div class="row search-row animated fadeInUp">
                        <div class="col-lg-4 col-sm-4 search-col relative locationicon">
                            <i class="icon-location-2 icon-append"></i>
                            <button type="text" name="country"
                                    class="form-control locinput input-rel searchtag-input has-icon text-left"
                                    data-toggle="modal"
                                    data-target=".cityModal">

                            Мой город {{$GeoCity->name}}</button>


                        </div>
                        <div class="col-lg-4 col-sm-4 search-col relative"><i class="icon-docs icon-append"></i>
                            <input type="text" name="ads" class="form-control has-icon"
                                   placeholder="Я хочу найти..." value="">
                        </div>
                        <div class="col-lg-4 col-sm-4 search-col">
                            <button class="btn btn-primary btn-search btn-block"><i
                                        class="icon-search"></i><strong>Найти</strong></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="main-container">

        @if (Session::has('flash_notification.message'))
            <div class="container">
                <div class="row">
                    <div class="col-md-12 page-content">
                        <div class="inner-box category-content">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <div class="alert alert-{{ Session::get('flash_notification.level') }} pgray  alert-lg"
                                         role="alert">
                                        <h2 class="no-margin no-padding">{{ Session::get('flash_notification.message') }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif



        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Объявления в моём городе </h2>

                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">

                                @foreach($categoryList[0] as $value)
                                    <div class="cat-list">
                                        <h3 class="cat-title"><a href="{{route('category.show',$value->slug)}}"><i
                                                        class="{{$value->icons}} ln-shadow"></i> {{$value->name}} <span
                                                        class="count">277,959</span> </a>
                                            <span data-target=".cat-id-{{$value->id}}" data-toggle="collapse"
                                                  class="btn-cat-collapsed collapsed"> <span
                                                        class=" icon-down-open-big"></span> </span>
                                        </h3>
                                        <ul class="cat-collapse collapse in cat-id-{{$value->id}}"
                                            style="height: auto;">
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
                                                        class="{{$value->icons}} ln-shadow"></i> {{$value->name}} <span
                                                        class="count">277,959</span> </a>
                                            <span data-target=".cat-id-{{$value->id}}" data-toggle="collapse"
                                                  class="btn-cat-collapsed collapsed"> <span
                                                        class=" icon-down-open-big"></span> </span>
                                        </h3>
                                        <ul class="cat-collapse collapse in cat-id-{{$value->id}}"
                                            style="height: auto;">
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
                                                        class="{{$value->icons}} ln-shadow"></i> {{$value->name}} <span
                                                        class="count">277,959</span> </a>
                                            <span data-target=".cat-id-{{$value->id}}" data-toggle="collapse"
                                                  class="btn-cat-collapsed collapsed"> <span
                                                        class=" icon-down-open-big"></span> </span>
                                        </h3>
                                        <ul class="cat-collapse collapse in cat-id-{{$value->id}}"
                                            style="height: auto;">
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
                <div class="hidden-xs col-sm-3 page-sidebar col-thin-left">
                    <aside>

                        <div class="inner-box">
                            <h2 class="title-2">Популярные категории </h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    @foreach($popularCategory as $value)
                                        <li><a href="{{route('category.show',$value->slug)}}"> {{$value->name}}
                                                ({{$value->count}}) </a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="inner-box no-padding">
                            <div class="inner-box-content"><a href="#"><img class="img-responsive"
                                                                            src="images/site/app.jpg" alt="tv"></a>
                            </div>
                        </div>


                    </aside>
                </div>
            </div>
        </div>
    </div>



    <div class="page-info hidden-xs" style="background: url('/images/bg.jpg'); background-size:cover">
        <div class="container text-center section-promo">
            <div class="row">
                <div class="col-sm-3 col-xs-6 col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>{{$UserCount}}</span></h5>

                                <div class="iconbox-wrap-text">Пользователей</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="fa fa-th"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>{{$CategoryCount}}</span></h5>

                                <div class="iconbox-wrap-text">Категорий</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-6  col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="fa fa-map-o"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>{{ $CityCount }}</span></h5>

                                <div class="iconbox-wrap-text">Городов</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-xxs-12">
                    <div class="iconbox-wrap">
                        <div class="iconbox">
                            <div class="iconbox-wrap-icon">
                                <i class="icon fa fa-calendar-o"></i>
                            </div>
                            <div class="iconbox-wrap-content">
                                <h5><span>{{$advertisingCount}}</span></h5>

                                <div class="iconbox-wrap-text">Объявлений</div>
                            </div>
                        </div>

                    </div>
                </div>
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
                    <h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <p>Popular cities in <strong>New York</strong>
                            </p>

                            <div style="clear:both"></div>
                            <div class="col-sm-6 no-padding">
                                <div class="selecter  closed" tabindex="0"><select
                                            class="form-control selecter   selecter-element" id="region-state"
                                            name="region-state" tabindex="-1">
                                        <option value="" class="selecter-placeholder" selected="">Select An Item
                                        </option>
                                        <option value="">All States/Provinces</option>
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="District of Columbia">District of Columbia</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky">Kentucky</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts">Massachusetts</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option selected="" value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania">Pennsylvania</option>
                                        <option value="Rhode Island">Rhode Island</option>
                                        <option value="South Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virgin Islands">Virgin Islands</option>
                                        <option value="Virginia">Virginia</option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="Wisconsin">Wisconsin</option>
                                        <option value="Wyoming">Wyoming</option>
                                    </select><span class="selecter-selected">New York</span>

                                    <div class="selecter-options scroller">
                                        <div class="scroller-bar" style="height: 100px;">
                                            <div class="scroller-track"
                                                 style="height: 100px; margin-bottom: 0px; margin-top: 0px;">
                                                <div class="scroller-handle"></div>
                                            </div>
                                        </div>
                                        <div class="scroller-content"><span class="selecter-item placeholder"
                                                                            data-value="">Select An Item</span><span
                                                    class="selecter-item" data-value="">All States/Provinces</span><span
                                                    class="selecter-item" data-value="Alabama">Alabama</span><span
                                                    class="selecter-item" data-value="Alaska">Alaska</span><span
                                                    class="selecter-item" data-value="Arizona">Arizona</span><span
                                                    class="selecter-item" data-value="Arkansas">Arkansas</span><span
                                                    class="selecter-item" data-value="California">California</span><span
                                                    class="selecter-item" data-value="Colorado">Colorado</span><span
                                                    class="selecter-item"
                                                    data-value="Connecticut">Connecticut</span><span
                                                    class="selecter-item" data-value="Delaware">Delaware</span><span
                                                    class="selecter-item" data-value="District of Columbia">District of Columbia</span><span
                                                    class="selecter-item" data-value="Florida">Florida</span><span
                                                    class="selecter-item" data-value="Georgia">Georgia</span><span
                                                    class="selecter-item" data-value="Hawaii">Hawaii</span><span
                                                    class="selecter-item" data-value="Idaho">Idaho</span><span
                                                    class="selecter-item" data-value="Illinois">Illinois</span><span
                                                    class="selecter-item" data-value="Indiana">Indiana</span><span
                                                    class="selecter-item" data-value="Iowa">Iowa</span><span
                                                    class="selecter-item" data-value="Kansas">Kansas</span><span
                                                    class="selecter-item" data-value="Kentucky">Kentucky</span><span
                                                    class="selecter-item" data-value="Louisiana">Louisiana</span><span
                                                    class="selecter-item" data-value="Maine">Maine</span><span
                                                    class="selecter-item" data-value="Maryland">Maryland</span><span
                                                    class="selecter-item"
                                                    data-value="Massachusetts">Massachusetts</span><span
                                                    class="selecter-item" data-value="Michigan">Michigan</span><span
                                                    class="selecter-item" data-value="Minnesota">Minnesota</span><span
                                                    class="selecter-item"
                                                    data-value="Mississippi">Mississippi</span><span
                                                    class="selecter-item" data-value="Missouri">Missouri</span><span
                                                    class="selecter-item" data-value="Montana">Montana</span><span
                                                    class="selecter-item" data-value="Nebraska">Nebraska</span><span
                                                    class="selecter-item" data-value="Nevada">Nevada</span><span
                                                    class="selecter-item"
                                                    data-value="New Hampshire">New Hampshire</span><span
                                                    class="selecter-item" data-value="New Jersey">New Jersey</span><span
                                                    class="selecter-item" data-value="New Mexico">New Mexico</span><span
                                                    class="selecter-item selected" data-value="New York">New York</span><span
                                                    class="selecter-item"
                                                    data-value="North Carolina">North Carolina</span><span
                                                    class="selecter-item"
                                                    data-value="North Dakota">North Dakota</span><span
                                                    class="selecter-item" data-value="Ohio">Ohio</span><span
                                                    class="selecter-item" data-value="Oklahoma">Oklahoma</span><span
                                                    class="selecter-item" data-value="Oregon">Oregon</span><span
                                                    class="selecter-item"
                                                    data-value="Pennsylvania">Pennsylvania</span><span
                                                    class="selecter-item"
                                                    data-value="Rhode Island">Rhode Island</span><span
                                                    class="selecter-item"
                                                    data-value="South Carolina">South Carolina</span><span
                                                    class="selecter-item"
                                                    data-value="South Dakota">South Dakota</span><span
                                                    class="selecter-item" data-value="Tennessee">Tennessee</span><span
                                                    class="selecter-item" data-value="Texas">Texas</span><span
                                                    class="selecter-item" data-value="Utah">Utah</span><span
                                                    class="selecter-item" data-value="Vermont">Vermont</span><span
                                                    class="selecter-item"
                                                    data-value="Virgin Islands">Virgin Islands</span><span
                                                    class="selecter-item" data-value="Virginia">Virginia</span><span
                                                    class="selecter-item" data-value="Washington">Washington</span><span
                                                    class="selecter-item"
                                                    data-value="West Virginia">West Virginia</span><span
                                                    class="selecter-item" data-value="Wisconsin">Wisconsin</span><span
                                                    class="selecter-item" data-value="Wyoming">Wyoming</span></div>
                                    </div>
                                </div>
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







@endsection