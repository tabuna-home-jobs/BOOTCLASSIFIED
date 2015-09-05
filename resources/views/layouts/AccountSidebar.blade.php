<div class="col-sm-3 page-sidebar">
    <aside>
        <div class="inner-box">
            <div class="user-panel-sidebar">
                <div class="collapse-box">
                    <h5 class="collapse-title no-border"> Мои настройки <a href="account-home.html#MyClassified"
                                                                           data-toggle="collapse" class="pull-right"><i
                                    class="fa fa-angle-down"></i></a></h5>

                    <div class="panel-collapse collapse in" id="MyClassified">
                        <ul class="acc-list">
                            <li><a class="active" href="{{route('settings.index')}}"><i class="icon-cog"></i> Настройки
                                </a></li>
                        </ul>
                    </div>
                </div>

                <div class="collapse-box">
                    <h5 class="collapse-title"> Мои обьявления <a href="account-home.html#MyAds" data-toggle="collapse"
                                                                  class="pull-right"><i
                                    class="fa fa-angle-down"></i></a></h5>

                    <div class="panel-collapse collapse in" id="MyAds">
                        <ul class="acc-list">
                            <li><a href="account-myads.html"><i class="icon-docs"></i> Мои обьявления <span
                                            class="badge">42</span> </a></li>
                            <li><a href="account-favourite-ads.html"><i class="icon-heart"></i> Мне понравились <span
                                            class="badge">42</span> </a></li>
                            <li><a href="account-archived-ads.html"><i class="icon-folder-close"></i> Архив <span
                                            class="badge">42</span></a></li>
                            <li><a href="account-pending-approval-ads.html"><i class="icon-money "></i> Платежи <span
                                            class="badge">42</span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="collapse-box">
                    <h5 class="collapse-title"> Сеанс <a href="account-home.html#TerminateAccount"
                                                         data-toggle="collapse" class="pull-right"><i
                                    class="fa fa-angle-down"></i></a></h5>

                    <div class="panel-collapse collapse in" id="TerminateAccount">
                        <ul class="acc-list">
                            <li><a href="{{ url('/auth/logout') }}"><i class="icon-cancel-circled "></i> Выйти </a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </aside>
</div>
