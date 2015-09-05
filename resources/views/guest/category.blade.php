@extends('layouts.app')

@section('main')



    <div class="search-row-wrapper">
        <div class="container ">
            <form action="#" method="GET">
                <div class="col-sm-3">
                    <input class="form-control keyword" type="text" placeholder="Я ищу ...">
                </div>
                <div class="col-sm-3">
                    <div class="selecter  closed" tabindex="0"><select class="form-control selecter selecter-element"
                                                                       name="category" id="search-category"
                                                                       tabindex="-1">
                            <option value="" class="selecter-placeholder" selected="">Я ищу ...</option>
                            <option selected="selected" value="">All Categories</option>
                            <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;"
                                    disabled="disabled"> - Vehicles -
                            </option>
                            <option value="Cars"> Cars</option>
                            <option value="Commercial vehicles"> Commercial vehicles</option>
                            <option value="Motorcycles"> Motorcycles</option>
                            <option value="Motorcycle Equipment"> Car &amp; Motorcycle Equipment</option>
                            <option value="Boats"> Boats</option>
                            <option value="Vehicles"> Other Vehicles</option>
                            <option value="House" style="background-color:#E9E9E9;font-weight:bold;"
                                    disabled="disabled"> - House and Children -
                            </option>
                            <option value="Appliances"> Appliances</option>
                            <option value="Inside"> Inside</option>
                            <option value="Games"> Games and Clothing</option>
                            <option value="Garden"> Garden</option>
                            <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;"
                                    disabled="disabled"> - Multimedia -
                            </option>
                            <option value="Telephony"> Telephony</option>
                            <option value="Image"> Image and sound</option>
                            <option value="Computers"> Computers and Accessories</option>
                            <option value="Video"> Video games and consoles</option>
                            <option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled">
                                - Real Estate -
                            </option>
                            <option value="Apartment"> Apartment</option>
                            <option value="Home"> Home</option>
                            <option value="Vacation"> Vacation Rentals</option>
                            <option value="Commercial"> Commercial offices and local</option>
                            <option value="Grounds"> Grounds</option>
                            <option value="Houseshares"> Houseshares</option>
                            <option value="Other real estate"> Other real estate</option>
                            <option value="Services" style="background-color:#E9E9E9;font-weight:bold;"
                                    disabled="disabled"> - Services -
                            </option>
                            <option value="Jobs"> Jobs</option>
                            <option value="Job application"> Job application</option>
                            <option value="Services"> Services</option>
                            <option value="Price"> Price</option>
                            <option value="Business"> Business and goodwill</option>
                            <option value="Professional"> Professional equipment</option>
                            <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;"
                                    disabled="disabled"> - Extra -
                            </option>
                            <option value="Other"> Other</option>
                        </select><span class="selecter-selected">Все категории</span>

                        <div class="selecter-options scroller">
                            <div class="scroller-bar" style="height: 100px;">
                                <div class="scroller-track" style="height: 100px; margin-bottom: 0px; margin-top: 0px;">
                                    <div class="scroller-handle"></div>
                                </div>
                            </div>
                            <div class="scroller-content"><span class="selecter-item placeholder" data-value="">Select An Item</span><span
                                        class="selecter-item selected" data-value="">All Categories</span><span
                                        class="selecter-item disabled" data-value="Vehicles"> - Vehicles - </span><span
                                        class="selecter-item" data-value="Cars"> Cars </span><span class="selecter-item"
                                                                                                   data-value="Commercial vehicles"> Commercial vehicles </span><span
                                        class="selecter-item" data-value="Motorcycles"> Motorcycles </span><span
                                        class="selecter-item" data-value="Motorcycle Equipment"> Car &amp; Motorcycle Equipment </span><span
                                        class="selecter-item" data-value="Boats"> Boats </span><span
                                        class="selecter-item" data-value="Vehicles"> Other Vehicles </span><span
                                        class="selecter-item disabled"
                                        data-value="House"> - House and Children - </span><span class="selecter-item"
                                                                                                data-value="Appliances"> Appliances </span><span
                                        class="selecter-item" data-value="Inside"> Inside </span><span
                                        class="selecter-item" data-value="Games"> Games and Clothing </span><span
                                        class="selecter-item" data-value="Garden"> Garden </span><span
                                        class="selecter-item disabled"
                                        data-value="Multimedia"> - Multimedia - </span><span class="selecter-item"
                                                                                             data-value="Telephony"> Telephony </span><span
                                        class="selecter-item" data-value="Image"> Image and sound </span><span
                                        class="selecter-item"
                                        data-value="Computers"> Computers and Accessories </span><span
                                        class="selecter-item" data-value="Video"> Video games and consoles </span><span
                                        class="selecter-item disabled" data-value="Real"> - Real Estate - </span><span
                                        class="selecter-item" data-value="Apartment"> Apartment </span><span
                                        class="selecter-item" data-value="Home"> Home </span><span class="selecter-item"
                                                                                                   data-value="Vacation"> Vacation Rentals </span><span
                                        class="selecter-item"
                                        data-value="Commercial"> Commercial offices and local </span><span
                                        class="selecter-item" data-value="Grounds"> Grounds </span><span
                                        class="selecter-item" data-value="Houseshares"> Houseshares </span><span
                                        class="selecter-item"
                                        data-value="Other real estate"> Other real estate </span><span
                                        class="selecter-item disabled" data-value="Services"> - Services - </span><span
                                        class="selecter-item" data-value="Jobs"> Jobs </span><span class="selecter-item"
                                                                                                   data-value="Job application"> Job application </span><span
                                        class="selecter-item" data-value="Services"> Services </span><span
                                        class="selecter-item" data-value="Price"> Price </span><span
                                        class="selecter-item" data-value="Business"> Business and goodwill </span><span
                                        class="selecter-item"
                                        data-value="Professional"> Professional equipment </span><span
                                        class="selecter-item disabled" data-value="dropoff"> - Extra - </span><span
                                        class="selecter-item" data-value="Other"> Other </span></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="selecter  closed" tabindex="0"><select class="form-control selecter selecter-element"
                                                                       name="location" id="id-location" tabindex="-1">
                            <option value="" class="selecter-placeholder" selected="">Select An Item</option>
                            <option selected="selected" value="">Мой город...</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                            <option value="Other-Locations">Other Locations</option>
                        </select><span class="selecter-selected">Мой город...</span>

                        <div class="selecter-options scroller">
                            <div class="scroller-bar" style="height: 100px;">
                                <div class="scroller-track" style="height: 100px; margin-bottom: 0px; margin-top: 0px;">
                                    <div class="scroller-handle"></div>
                                </div>
                            </div>
                            <div class="scroller-content"><span class="selecter-item placeholder" data-value="">Select An Item</span><span
                                        class="selecter-item selected" data-value="">All Locations</span><span
                                        class="selecter-item" data-value="AL">Alabama</span><span class="selecter-item"
                                                                                                  data-value="AK">Alaska</span><span
                                        class="selecter-item" data-value="AZ">Arizona</span><span class="selecter-item"
                                                                                                  data-value="AR">Arkansas</span><span
                                        class="selecter-item" data-value="CA">California</span><span
                                        class="selecter-item" data-value="CO">Colorado</span><span class="selecter-item"
                                                                                                   data-value="CT">Connecticut</span><span
                                        class="selecter-item" data-value="DE">Delaware</span><span class="selecter-item"
                                                                                                   data-value="DC">District Of Columbia</span><span
                                        class="selecter-item" data-value="FL">Florida</span><span class="selecter-item"
                                                                                                  data-value="GA">Georgia</span><span
                                        class="selecter-item" data-value="HI">Hawaii</span><span class="selecter-item"
                                                                                                 data-value="ID">Idaho</span><span
                                        class="selecter-item" data-value="IL">Illinois</span><span class="selecter-item"
                                                                                                   data-value="IN">Indiana</span><span
                                        class="selecter-item" data-value="IA">Iowa</span><span class="selecter-item"
                                                                                               data-value="KS">Kansas</span><span
                                        class="selecter-item" data-value="KY">Kentucky</span><span class="selecter-item"
                                                                                                   data-value="LA">Louisiana</span><span
                                        class="selecter-item" data-value="ME">Maine</span><span class="selecter-item"
                                                                                                data-value="MD">Maryland</span><span
                                        class="selecter-item" data-value="MA">Massachusetts</span><span
                                        class="selecter-item" data-value="MI">Michigan</span><span class="selecter-item"
                                                                                                   data-value="MN">Minnesota</span><span
                                        class="selecter-item" data-value="MS">Mississippi</span><span
                                        class="selecter-item" data-value="MO">Missouri</span><span class="selecter-item"
                                                                                                   data-value="MT">Montana</span><span
                                        class="selecter-item" data-value="NE">Nebraska</span><span class="selecter-item"
                                                                                                   data-value="NV">Nevada</span><span
                                        class="selecter-item" data-value="NH">New Hampshire</span><span
                                        class="selecter-item" data-value="NJ">New Jersey</span><span
                                        class="selecter-item" data-value="NM">New Mexico</span><span
                                        class="selecter-item" data-value="NY">New York</span><span class="selecter-item"
                                                                                                   data-value="NC">North Carolina</span><span
                                        class="selecter-item" data-value="ND">North Dakota</span><span
                                        class="selecter-item" data-value="OH">Ohio</span><span class="selecter-item"
                                                                                               data-value="OK">Oklahoma</span><span
                                        class="selecter-item" data-value="OR">Oregon</span><span class="selecter-item"
                                                                                                 data-value="PA">Pennsylvania</span><span
                                        class="selecter-item" data-value="RI">Rhode Island</span><span
                                        class="selecter-item" data-value="SC">South Carolina</span><span
                                        class="selecter-item" data-value="SD">South Dakota</span><span
                                        class="selecter-item" data-value="TN">Tennessee</span><span
                                        class="selecter-item" data-value="TX">Texas</span><span class="selecter-item"
                                                                                                data-value="UT">Utah</span><span
                                        class="selecter-item" data-value="VT">Vermont</span><span class="selecter-item"
                                                                                                  data-value="VA">Virginia</span><span
                                        class="selecter-item" data-value="WA">Washington</span><span
                                        class="selecter-item" data-value="WV">West Virginia</span><span
                                        class="selecter-item" data-value="WI">Wisconsin</span><span
                                        class="selecter-item" data-value="WY">Wyoming</span><span class="selecter-item"
                                                                                                  data-value="Other-Locations">Other Locations</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-block btn-primary  "><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>




    <div class="main-container">

    <div class="container">
            <div class="row">


                @if(isset($categoryList))
                    @include('layouts.MainCategoryBlock')
                @endif


                <div class="col-sm-9 page-content col-thin-left">
                    <div class="category-list">
                        <div class="tab-box ">

                            <ul class="nav nav-tabs add-tabs" id="ajaxTabs" role="tablist">
                                <li class="active"><a href="#allAds" data-url="ajax/1.html" role="tab"
                                                      data-toggle="tab">Все обьявления <span
                                                class="badge">228,705</span></a>
                                </li>
                                <li><a href="#businessAds" data-url="ajax/2.html" role="tab" data-toggle="tab">Компании
                                        <span class="badge">22,805</span></a></li>
                                <li><a href="#personalAds" data-url="ajax/3.html" role="tab" data-toggle="tab">Частные
                                        <span class="badge">18,705</span></a></li>
                            </ul>
                            <div class="tab-filter">
                                <div class="selecter select-short-by closed" tabindex="0"><select
                                            class="selectpicker selecter-element" data-style="btn-select"
                                            data-width="auto" tabindex="-1">
                                        <option value="Short by">Short by</option>
                                        <option value="Price: Low to High">Price: Low to High</option>
                                        <option value="Price: High to Low">Price: High to Low</option>
                                    </select><span class="selecter-selected">Short by</span>

                                    <div class="selecter-options scroller">
                                        <div class="scroller-bar" style="height: 100px;">
                                            <div class="scroller-track"
                                                 style="height: 100px; margin-bottom: 0px; margin-top: 0px;">
                                                <div class="scroller-handle"></div>
                                            </div>
                                        </div>
                                        <div class="scroller-content"><span class="selecter-item selected"
                                                                            data-value="Short by">Short by</span><span
                                                    class="selecter-item" data-value="Price: Low to High">Price: Low to High</span><span
                                                    class="selecter-item" data-value="Price: High to Low">Price: High to Low</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-filter">
                            <div class="pull-left col-xs-6">
                                <div class="breadcrumb-list"><a href="#" class="current">
                                        <span>Искать</span></a> по фильтру?
                                </div>
                            </div>
                            <div class="pull-right col-xs-6 text-right listing-view-action"><span
                                        class="list-view active"><i class="  icon-th"></i></span> <span
                                        class="compact-view"><i class=" icon-th-list  "></i></span> <span
                                        class="grid-view "><i class=" icon-th-large "></i></span></div>
                            <div style="clear:both"></div>
                        </div>

                        <div class="adds-wrapper">
                            <div class="tab-content">
                                <div class="tab-pane active" id="allAds">
                                    <div class="item-list">
                                        <div class="cornerRibbons topAds">
                                            <a href="#"> Top Ads</a>
                                        </div>
                                        <div class="col-sm-2 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i
                                                            class="fa fa-camera"></i> 2 </span> <a
                                                        href="ads-details.html"><img class="thumbnail no-margin"
                                                                                     src="/images/item/tp/Image00015.jpg"
                                                                                     alt="img"></a></div>
                                        </div>

                                        <div class="col-sm-7 add-desc-box">
                                            <div class="add-details">
                                                <h5 class="add-title"><a href="ads-details.html">
                                                        Brand New Samsung Phones </a></h5>
                                                <span class="info-row"><span
                                                            class="date"><i
                                                                class=" icon-clock"> </i>Два часа назад </span> - <span
                                                            class="category">Электроника </span>- <span
                                                            class="item-location"><i class="fa fa-map-marker"></i> Липецк </span> </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-right  price-box">
                                            <h2 class="item-price"><i class="fa fa-rub"></i> 320 </h2> <a
                                                    class="btn btn-default  btn-sm make-favorite"> <i
                                                        class="fa fa-heart"></i> <span>Сохранить</span> </a></div>

                                    </div>

                                    <div class="item-list">
                                        <div class="cornerRibbons urgentAds">
                                            <a href="#"> Срочный</a>
                                        </div>
                                        <div class="col-sm-2 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i
                                                            class="fa fa-camera"></i> 2 </span> <a
                                                        href="ads-details.html"><img class="thumbnail no-margin"
                                                                                     src="/images/item/tp/Image00014.jpg"
                                                                                     alt="img"></a></div>
                                        </div>

                                        <div class="col-sm-7 add-desc-box">
                                            <div class="add-details">
                                                <h5 class="add-title"><a href="ads-details.html"> Samsung Galaxy S Dous
                                                        (Brand New/ Intact Box) With 1year Warranty </a></h5>
                                                <span class="info-row">  <span
                                                            class="date"><i
                                                                class=" icon-clock"> </i>Два часа назад </span> - <span
                                                            class="category">Электроника </span>- <span
                                                            class="item-location"><i class="fa fa-map-marker"></i> Липецк </span> </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-right  price-box">
                                            <h2 class="item-price"><i class="fa fa-rub"></i> 230</h2>
                                            <a class="btn btn-default  btn-sm make-favorite"> <i
                                                        class="fa fa-heart"></i> <span>Сохранить</span> </a></div>

                                    </div>


                                    <div class="item-list">
                                        <div class="col-sm-2 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i
                                                            class="fa fa-camera"></i> 2 </span> <a
                                                        href="ads-details.html"><img class="thumbnail no-margin"
                                                                                     src="/images/item/tp/Image00022.jpg"
                                                                                     alt="img"></a></div>
                                        </div>

                                        <div class="col-sm-7 add-desc-box">
                                            <div class="add-details">
                                                <h5 class="add-title"><a href="ads-details.html"> Apple iPod touch 16 GB
                                                        3rd Generation </a></h5>
                                                <span class="info-row"> <span
                                                            class="date"><i
                                                                class=" icon-clock"> </i>Два часа назад </span> - <span
                                                            class="category">Электроника </span>- <span
                                                            class="item-location"><i class="fa fa-map-marker"></i> Липецк </span> </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-right  price-box">
                                            <h2 class="item-price"><i class="fa fa-rub"></i> 150 </h2>
                                            <a class="btn btn-default  btn-sm make-favorite"> <i
                                                        class="fa fa-heart"></i> <span>Сохранить</span> </a></div>

                                    </div>

                                    <div class="item-list">
                                        <div class="col-sm-2 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i
                                                            class="fa fa-camera"></i> 2 </span> <a
                                                        href="ads-details.html"><img class="thumbnail no-margin"
                                                                                     src="/images/item/FreeGreatPicture.com-46405-google-drops-price-of-nexus-4-smartphone.jpg"
                                                                                     alt="img"></a></div>
                                        </div>

                                        <div class="col-sm-7 add-desc-box">
                                            <div class="add-details">
                                                <h5 class="add-title"><a href="ads-details.html"> Google drops Nexus 4
                                                        by $100, offers 15 day price protection refund </a></h5>
                                                <span class="info-row"> <span
                                                            class="date"><i
                                                                class=" icon-clock"> </i>Два часа назад </span> - <span
                                                            class="category">Электроника </span>- <span
                                                            class="item-location"><i class="fa fa-map-marker"></i> Липецк </span> </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-right  price-box">
                                            <h2 class="item-price"><i class="fa fa-rub"></i> 150 </h2>
                                            <a class="btn btn-default  btn-sm make-favorite"> <i
                                                        class="fa fa-heart"></i> <span>Сохранить</span> </a></div>

                                    </div>

                                    <div class="item-list">
                                        <div class="col-sm-2 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i
                                                            class="fa fa-camera"></i> 2 </span> <a
                                                        href="ads-details.html"><img class="thumbnail no-margin"
                                                                                     src="/images/item/FreeGreatPicture.com-46404-google-drops-nexus-4-by-100-offers-15-day-price-protection-refund.jpg"
                                                                                     alt="img"></a></div>
                                        </div>

                                        <div class="col-sm-7 add-desc-box">
                                            <div class="add-details">
                                                <h5 class="add-title"><a href="ads-details.html"> Google drops Nexus
                                                        4 </a></h5>
                                                <span class="info-row"> <span
                                                            class="date"><i
                                                                class=" icon-clock"> </i>Два часа назад </span> - <span
                                                            class="category">Электроника </span>- <span
                                                            class="item-location"><i class="fa fa-map-marker"></i> Липецк </span> </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-right  price-box">
                                            <h2 class="item-price"><i class="fa fa-rub"></i> 150 </h2>
                                            <a class="btn btn-default  btn-sm make-favorite"> <i
                                                        class="fa fa-heart"></i> <span>Сохранить</span> </a></div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="businessAds"></div>
                                <div class="tab-pane" id="personalAds"></div>
                            </div>
                        </div>

                    </div>
                    <div class="pagination-bar text-center">


                        <nav>
                            <ul class="pager">
                                <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span>
                                        Назад</a></li>
                                <li class="next"><a href="#">Дальше <span aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                        </nav>


                    </div>

                    <div class="post-promo text-center">
                        <h2> Есть что нибудь для продажи? </h2>
                        <h5>Продавать свои товары онлайн бесплатно. Это проще, чем вы думаете!</h5>
                        <a href="{{route('advertising.create')}}" class="btn btn-lg btn-border btn-post btn-danger">Подать
                            объявление</a>
                    </div>

                </div>

            </div>
        </div>
    </div>




@endsection