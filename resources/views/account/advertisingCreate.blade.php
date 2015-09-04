@extends('layouts.app')

@section('main')


    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-9 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> Подать бесплатное объявление
                            </strong></h2>

                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-horizontal">
                                    <fieldset>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Категория</label>

                                            <div class="col-md-8">
                                                <select name="category-group" id="category-group" class="form-control">
                                                    <option disabled selected="selected"> Выберите категорию ...
                                                    </option>


                                                    @foreach($categoryList as $value)

                                                        <optgroup label="{{$value->name}}">

                                                            @foreach($value->getSubCategory as $subValue)
                                                                <option value="{{$value->id}}">{{$subValue->name}}</option>
                                                            @endforeach
                                                        </optgroup>

                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Тип</label>

                                            <div class="col-md-8">
                                                <label class="radio-inline" for="radios-0">
                                                    <input name="radios" id="radios-0" value="Private" checked="checked"
                                                           type="radio">
                                                    Личный </label>
                                                <label class="radio-inline" for="radios-1">
                                                    <input name="radios" id="radios-1" value="Business" type="radio">
                                                    Бизнес </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="Adtitle">Заголовок</label>

                                            <div class="col-md-8">
                                                <input id="Adtitle" name="Adtitle" placeholder="Заголовок обьявления"
                                                       class="form-control input-md" required="" type="text">
                                                <span class="help-block">Не пишите в заголовке цену и контактную информацию — для этого есть отдельные поля — и не используйте слово «продам» </span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="textarea">Описание</label>

                                            <div class="col-md-8">
                                                <textarea class="form-control" id="textarea" rows="10" name="textarea"
                                                          placeholder="Подробно опишите ваш товар или услугу. Не указывайте в описании телефон и e-mail — для этого есть отдельные поля"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="Price">Цена</label>

                                            <div class="col-md-8">
                                                <div class="input-group"><span class="input-group-addon"><i
                                                                class="fa fa-rub"></i></span>
                                                    <input id="Price" name="Price" class="form-control"
                                                           placeholder="Цена" required="" type="number">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="textarea"> Изображения </label>

                                            <div class="col-md-8">
                                                <p class="help-block">Вы можете прикрепить не более 5 фотографий.
                                                    Пожалуйста используйте реальные изображения товара.</p>
                                            </div>
                                        </div>
                                        <div class="content-subheading"><i class="icon-user fa"></i> <strong>Контактная
                                                информация</strong></div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="textinput-name">Имя</label>

                                            <div class="col-md-8">
                                                <input id="textinput-name" name="textinput-name"
                                                       placeholder="Имя продавца" value="{{Auth::user()->name}}"
                                                       class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="seller-email"> Email</label>

                                            <div class="col-md-8">
                                                <input id="seller-email" name="seller-email" class="form-control"
                                                       placeholder="Email продавца" value="{{Auth::user()->email}}"
                                                       required="" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="seller-Number"> Телефон</label>

                                            <div class="col-md-8">
                                                <input id="seller-Number" name="seller-Number"
                                                       placeholder="Контактный телефон" value="{{Auth::user()->phone}}"
                                                       class="form-control input-md" required="" type="text">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="seller-Location">Область</label>

                                            <div class="col-md-8">
                                                <select id="seller-Location" name="seller-Location"
                                                        class="form-control">
                                                    <option selected disabled>Выберите область ...</option>
                                                    @foreach($countryList as $value)
                                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="seller-area">Город</label>

                                            <div class="col-md-8">
                                                <select id="seller-area" name="seller-area" class="form-control">
                                                    <option value="1">Option one</option>
                                                    <option value="2">Option two</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Правила</label>

                                            <div class="col-md-8">
                                                <label class="checkbox-inline" for="checkboxes-0">
                                                    <input name="checkboxes" id="checkboxes-0"
                                                           value="Remember above contact information." type="checkbox">
                                                    Я подтверждаю своё согласие с условиями<a href="terms-conditions.html"> пользовательского соглашения</a> </label>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 control-label"></label>

                                            <div class="col-md-8"><a href="posting-success.html" id="button1id"
                                                                     class="btn btn-success btn-lg">Отправить</a></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>


                            <h3><strong>Разместить объявление бесплатно</strong></h3>

                            <p> Разместить бесплатные объявления как частное лицо или компания. </p>
                        </div>
                        <div class="panel sidebar-panel">
                            <div class="panel-heading uppercase">
                                <small><strong>КАК БЫСТРО ПРОДАТЬ?</strong></small>
                            </div>
                            <div class="panel-content">
                                <div class="panel-body text-left">
                                    <ul class="list-check">
                                        <li> Используйте краткое название и описание товара или услуги</li>
                                        <li> Убедитесь, что вы размещаете в правильной категории</li>
                                        <li> Добавте хорошие фотографии, чтобы ваше объявление смотрелось</li>
                                        <li> Предложите разумную цену</li>
                                        <li> Проверте перед публикацией</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


@endsection
