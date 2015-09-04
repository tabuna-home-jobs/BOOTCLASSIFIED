<div class="col-sm-3 page-sidebar">
    <aside>
        <div class="inner-box">
            <div class="categories-list  list-filter">
                <h5 class="list-title"><strong><a href="#">Все категории</a></strong></h5>
                <ul class="list-unstyled">


                    @foreach($categoryList as $value)
                        <li><a href="{{route('category.show',$value->slug)}}"><span
                                        class="title">{{$value->name}}</span></a></li>
                    @endforeach
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
