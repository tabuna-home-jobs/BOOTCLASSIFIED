@extends('layouts.app')

@section('main')



    <div class="search-row-wrapper">
        <div class="container ">
            <form action="#" method="GET">
                <div class="col-sm-3">
                    <input class="form-control keyword" type="text" placeholder="Я ищу ...">
                </div>
                <div class="col-sm-3">
                    <div class="selecter  closed" tabindex="0">
                        <select class="form-control selecter selecter-selected"
                                                                       name="category">
                            @foreach($categoryList as $value)

                                <optgroup label="{{$value->name}}">
                                    @foreach($value->getSubCategory as $subValue)
                                        <option value="{{$subValue->id}}">{{$subValue->name}}</option>
                                    @endforeach
                                </optgroup>

                            @endforeach


                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="selecter  closed" tabindex="0"><select class="form-control selecter-selected  selecter"
                                                                       name="location">
                            @foreach($cityList as $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach

                        </select>
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


                <div class="col-sm-3 page-sidebar">
                    <aside>
                        <div class="inner-box">

                            <div class="categories-list  list-filter">
                                <h5 class="list-title"><strong><a href="{{url('/')}}"><i class="fa fa-angle-left"></i>
                                            Все категории</a></strong></h5>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('category.show',$categoryMain->slug)}}"><span
                                                    class="title"><strong>{{$categoryMain->name}}</strong></span><span
                                                    class="count">&nbsp; {{number_format($CountAdvListAll, 0, ',', ' ')}}</span></a>
                                        <ul class="list-unstyled long-list">


                                            @foreach($categorySub as $value)
                                                <li><a class="{{Active::path('category/'.$value->slug)}}"
                                                       href="{{route('category.show',$value->slug)}}">
                                                        {{$value->name}}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                </ul>
                            </div>


                            <div class="locations-list  list-filter">
                                <h5 class="list-title"><strong><a href="#">Цена</a></strong></h5>

                                <form role="form" class="form-inline ">
                                    <div class="form-group col-sm-4 no-padding">
                                        <input type="text" placeholder="2000 " id="minPrice" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-1 no-padding text-center"> -</div>
                                    <div class="form-group col-sm-4 no-padding">
                                        <input type="text" placeholder="3000 " id="maxPrice" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-3 no-padding">
                                        <button class="btn btn-default pull-right" type="submit">Ок</button>
                                    </div>
                                </form>
                                <div style="clear:both"></div>
                            </div>


                        </div>

                    </aside>
                </div>

                <div class="col-sm-9 page-content col-thin-left">
                    <div class="category-list">

                        <div class="adds-wrapper">
                            <div class="tab-content">
                                <div class="tab-pane active" id="allAds">


                                    @foreach($advertisingList as $ads)
                                        <div class="item-list">
                                        <div class="col-sm-2 no-padding photobox">
                                            <div class="add-image"><span class="photo-count"><i
                                                            class="fa fa-camera"></i> {{count($ads->getImages)}} </span>
                                                <a
                                                        href="{{route('category.advertising.show',[$category->slug,$ads->id])}}"><img
                                                            class="thumbnail no-margin"
                                                            src="@if(is_null($ads->getImages->first())) /images/noimage.jpg @else{{$ads->getImages->first()->path .'/'. $ads->getImages->first()->name}}@endif"
                                                                                     alt="img"></a></div>
                                        </div>

                                        <div class="col-sm-7 add-desc-box">
                                            <div class="add-details">
                                                <h5 class="add-title"><a
                                                            href="{{route('category.advertising.show',[$category->slug,$ads->id])}}">
                                                        {{$ads->title}} </a></h5>
                                                <span class="info-row"><span
                                                            class="date"><i
                                                                class="fa fa-clock-o"></i> {{$ads->created_at->diffForHumans() }} </span> &nbsp;  <span
                                                            class="category"><i
                                                                class="fa fa-tag"></i> {{$ads->getCategory->name}} </span> &nbsp;  <span
                                                            class="item-location"><i
                                                                class="fa fa-map-marker"></i> {{$ads->getCity->name}} </span> </span>
                                            </div>
                                        </div>

                                        <div class="col-sm-3 text-right  price-box">
                                            <h2 class="item-price"><i
                                                        class="fa fa-rub"></i> {{ number_format($ads->price, 0, ',', ' ')}}
                                            </h2>

                                            @if(Auth::check())
                                                <form action="{{route('like.store')}}" method="post">
                                                    <button type="submit" class="btn btn-default  btn-sm make-favorite">
                                                        <i
                                                                class="fa fa-heart"></i> <span>Сохранить</span></button>
                                                    <input type="hidden" name="adv" value="{{$ads->id}}">
                                                    {!! csrf_field() !!}
                                                </form>
                                            @endif
                                        </div>

                                    </div>
                                    @endforeach

                                </div>
                                <div class="tab-pane" id="businessAds"></div>
                                <div class="tab-pane" id="personalAds"></div>
                            </div>
                        </div>

                    </div>
                    <div class="pagination-bar text-center">

                        <nav>
                            <ul class="pager">
                                <li class="previous
                                @if($advertisingList->currentPage() == 1) disabled @endif
                                        "><a href="{{$advertisingList->previousPageUrl()}}"><span
                                                aria-hidden="true">&larr;</span>
                                        Назад</a></li>
                                <li class="next
                                @if(!$advertisingList->hasMorePages()) disabled @endif
                                        "><a href="{{$advertisingList->nextPageUrl()}}">Дальше <span
                                                aria-hidden="true">&rarr;</span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="post-promo text-center">
                        <h2> Есть что нибудь для продажи? </h2>
                        <h5>Продавать свои товары онлайн бесплатно. Это проще, чем вы думаете!</h5>

                        @if(Auth::check())
                        <a href="{{route('advertising.create')}}" class="btn btn-lg btn-border btn-post btn-danger">Подать
                            объявление</a>
                        @else
                            <a href="{{url('/auth/register')}}" class="btn btn-lg btn-border btn-post btn-danger">Подать
                                объявление</a>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </div>




@endsection