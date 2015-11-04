@extends('layouts.app')

@section('main')


    <div class="container">
        <ol class="breadcrumb pull-left">
            <li><a href="/"><i class="icon-home fa"></i></a></li>


            @if($parrent = $advertising->getCategory->getParrentCategory()->first())

                <li><a href="{{route('category.show',$parrent->slug)}}">{{$parrent->name}}</a></li>

            @endif

            <li class="active">{{$advertising->getCategory->name}}</li>
        </ol>
        <div class="pull-right backtolist"><a href="{{URL::previous()}}"> <i class="fa fa-angle-double-left"></i> Назад</a></div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-9 page-content col-thin-right">
                <div class="inner inner-box ads-details-wrapper">
                    <h2> {{$advertising->title}} @if($advertising->type)<small class="label label-default adlistingtype">Компания</small>@endif </h2>
                    <span class="info-row"> <span class="date"><i class=" icon-clock"> </i> {{$advertising->created_at->diffForHumans() }} </span> - <span class="category"> {{$advertising->getCategory->name}} </span> - <span class="item-location"><i class="fa fa-map-marker"></i> {{$advertising->getCity->name}} </span> </span>
                    <div class="ads-image">
                        <h1 class="pricetag">{{ number_format($advertising->price, 0, ',', ' ')}} <i class="fa fa-rub"></i></h1>


                        <ul class="bxslider">
                            @forelse($advertising->getImages as $img)
                                <li><img src="{{$img->path ."/". $img->name}}" alt="img"/></li>
                            @empty
                                <li><img src="/images/noimage.jpg" alt="img"/></li>
                            @endforelse
                        </ul>

                        @if($advertising->getImages->count() > 1)
                            <div id="bx-pager">
                                @foreach($advertising->getImages as $key => $img)
                                    <a class="thumb-item-link" data-slide-index="{{$key}}" href="#"><img
                                                src="{{$img->path ."/". $img->name}}" alt="img"/></a>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="Ads-Details">
                        <h5 class="list-title"><strong>Описание</strong></h5>
                        <div class="row">
                            <div class="ads-details-info col-md-8">
                                <p>
                                    {{$advertising->description}}
                                </p>
                            </div>
                            <div class="col-md-4">
                                <div class="ads-action">
                                    <ul class="list-border">
                                        <li><a href="#"> <i class=" fa fa-heart"></i> Мне нравиться </a> </li>
                                        <li><a href="#"> <i class="fa fa-share-alt"></i> Поделиться </a> </li>
                                        <li><a href="#reportAdvertiser" data-toggle="modal"> <i class="fa icon-info-circled-alt"></i> Пожаловаться </a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content-footer text-left"><a class="btn  btn-default" data-toggle="modal"
                                                                 href="#contactAdvertiser"><i class="icon-mail-2"></i>
                                Написать сообщение </a> <a class="btn  btn-info"><i class="icon-phone-1"></i> {{$advertising->phone}}
                            </a></div>
                    </div>
                </div>

            </div>

            <div class="col-sm-3  page-sidebar-right">
                <aside>
                    <div class="panel sidebar-panel panel-contact-seller">
                        <div class="panel-heading">Продавец</div>
                        <div class="panel-content user-info">
                            <div class="panel-body text-center">
                                <div class="seller-info">
                                    <h3 class="no-margin">{{$advertising->name}}</h3>
                                    <p>Город: <strong>{{$advertising->getCity->name}}</strong></p>
                                    <p>Опубликовано: <strong>{{$advertising->updated_at->toDateString()}}</strong></p>
                                </div>
                                <div class="user-ads-action">
                                    <a href="#contactAdvertiser" data-toggle="modal" class="btn btn-default btn-block">
                                        <i class="icon-mail-2"></i> Написать сообщение </a>
                                    <a class="btn btn-info btn-block"><i class="icon-phone-1"></i>
                                        {{$advertising->phone}} </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel sidebar-panel">
                        <div class="panel-heading">Советы по безопасности для покупателей</div>
                        <div class="panel-content">
                            <div class="panel-body text-left">
                                <ul class="list-check">
                                    <li> Встречайтесь с продавцом в общественном месте </li>
                                    <li> Проверяйте товар, прежде чем купить</li>
                                    <li> Платите только после сборки или доставки товара</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>

        </div>
    </div>











    <div class="modal fade" id="reportAdvertiser" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><i class="fa icon-info-circled-alt"></i> Что не так с этим обьявлением ? </h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="report-reason" class="control-label">Причина:</label>
                            <select name="report-reason" id="report-reason" class="form-control">
                                <option disabled selected>Выберите причину</option>
                                <option value="soldUnavailable">Продавец не доступен</option>
                                <option value="fraud">Мошенничество</option>
                                <option value="duplicate">Дубликат</option>
                                <option value="spam">Спам</option>
                                <option value="wrongCategory">Неверный раздел</option>
                                <option value="other">Другое</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="control-label">Ваш email:</label>
                            <input type="text" name="email" maxlength="60" class="form-control" id="recipient-email">
                        </div>
                        <div class="form-group">
                            <label for="message-text2" class="control-label">Сообщение <span class="text-count">(300) </span>:</label>
                            <textarea class="form-control" id="message-text2" rows="5"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary">Отправит жалобу</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="contactAdvertiser" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><i class=" icon-mail-2"></i> Написать продавцу </h4>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Имя:</label>
                            <input class="form-control required" id="recipient-name" placeholder="Ваше имя" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text">
                        </div>
                        <div class="form-group">
                            <label for="sender-email" class="control-label">E-mail:</label>
                            <input id="sender-email" type="text" data-content="Must be a valid e-mail address (user@gmail.com)" data-trigger="manual" data-placement="top" placeholder="email@you.com" class="form-control email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-Phone-Number" class="control-label">Номер телефона:</label>
                            <input type="text" maxlength="60" class="form-control" id="recipient-Phone-Number">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Сообщение <span class="text-count">(300) </span>:</label>
                            <textarea class="form-control" id="message-text" rows="5" placeholder="Напишите сообщение" data-placement="top" data-trigger="manual"></textarea>
                        </div>
                        <div class="form-group">
                            <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-success pull-right">Отправить сообщение!</button>
                </div>
            </div>
        </div>
    </div>


@endsection