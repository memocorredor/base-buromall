<aside id="offside-m-menu" class="offside">
    <div class="offside-sidebar">
        <nav class="offside-sidebar-nav">
            <ul class="metismenu" id="menu-side-menu">
                <li>
                    <a href="{{ url('/') }}"><i class="fas fa-home"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_menu_main')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false"><i class="fas fa-newspaper"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_menu_content_static')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('home.sc_aboutus') }}"><i class="fas fa-child"></i><span class="menu-offside-span">@lang('web_menu.local_menu_aboutus')</span></a></li>
                        <li><a href="{{ route('home.sc_mision') }}"><i class="fas fa-rocket"></i><span class="menu-offside-span">@lang('web_menu.local_menu_mision')</span></a></li>
                        <li><a href="{{ route('home.sc_vision') }}"><i class="fas fa-eye"></i><span class="menu-offside-span">@lang('web_menu.local_menu_vision')</span></a></li>
                        <li><a href="{{ route('home.sc_objective') }}"><i class="fas fa-bomb"></i><span class="menu-offside-span">@lang('web_menu.local_menu_objective')</span></a></li>
                        <li><a href="{{ route('home.sc_term') }}"><i class="fas fa-balance-scale"></i><span class="menu-offside-span">@lang('web_menu.local_menu_terms')</span></a></li>
                        <li><a href="{{ route('home.sc_privacy') }}"><i class="fas fa-user-secret"></i><span class="menu-offside-span">@lang('web_menu.local_menu_privacy')</span></a></li>
                        <li><a href="{{ route('home.sc_intpropierty') }}"><i class="fas fa-graduation-cap"></i><span class="menu-offside-span">@lang('web_menu.local_menu_intpropierty')</a></li>
                        <li><a href="{{ route('home.sc_shipping') }}"><i class="fas fa-dolly"></i><span class="menu-offside-span">@lang('web_menu.local_menu_shipping')</span></a></li>
                        <li><a href="{{ route('home.sc_return') }}"><i class="fas fa-people-carry"></i><span class="menu-offside-span">@lang('web_menu.local_menu_return')</span></a></li>
                        <li><a href="{{ route('home.sc_refund') }}"><i class="fas fa-handshake"></i><span class="menu-offside-span">@lang('web_menu.local_menu_refund')</span></a></li>
                        <li><a href="{{ route('home.sc_cancelations') }}"><i class="fas fa-ban"></i><span class="menu-offside-span">@lang('web_menu.local_menu_cancelations')</span></a></li>
                        <li><a href="{{ route('home.sc_guarantee') }}"><i class="fas fa-hand-holding-usd"></i><span class="menu-offside-span">@lang('web_menu.local_menu_guarantee')</span></a></li>
                        <li><a href="{{ route('home.sc_cookies') }}"><i class="fas fa-cookie-bite"></i><span class="menu-offside-span">@lang('web_menu.local_menu_cookies')</span></a></li>
                        <li><a href="{{ route('home.sc_social') }}"><i class="fas fa-share-alt-square"></i><span class="menu-offside-span">@lang('web_menu.local_menu_social')</span></a></li>
                    </ul>
                </li>
                <li><a href="{{ route('home.sc_faqs') }}"><i class="fas fa-question-circle"></i><span class="menu-offside-span">@lang('web_menu.local_menu_faqs')</span></a></li>
                <li><a href="{{ route('home.user_plan') }}"><i class="fas fa-tasks"></i><span class="menu-offside-span">@lang('web_menu.local_aside_menu_plans')</span></a></li>
                <li><a href="{{ route('home.sc_recharge') }}"><i class="fas fa-donate"></i><span class="menu-offside-span">@lang('web_menu.local_menu_recharge')</span></a></li>
                <li><a href="{{ route('home.sc_earn') }}"><i class="fas fa-trophy"></i><span class="menu-offside-span">@lang('web_menu.local_menu_earn')</span></a></li>
                <li><a href="{{ route('home.user_store') }}"><i class="fas fa-store-alt"></i><span class="menu-offside-span">@lang('web_menu.local_menu_stores')</span></a></li>
                <li><a href="{{ route('home.user_product') }}"><i class="fas fa-gifts"></i><span class="menu-offside-span">@lang('web_menu.local_menu_products')</span></a></li>
                <li><a href="{{ route('home.user_cupon') }}"><i class="fas fa-crosshairs"></i><span class="menu-offside-span">@lang('web_menu.local_menu_cupons')</span></a></li>
                <li><a href="{{ route('home.user_event') }}"><i class="fas fa-theater-masks"></i><span class="menu-offside-span">@lang('web_menu.local_menu_events')</span></a></li>
                <li><a href="{{ route('home.user_classified') }}"><i class="fas fa-bullhorn"></i><span class="menu-offside-span">@lang('web_menu.local_menu_classified')</span></a></li>
                <li><a href="{{ route('home.user_news') }}"><i class="fas fa-newspaper"></i><span class="menu-offside-span">@lang('web_menu.local_aside_menu_news')</span></a></li>
                <li><a href="{{ route('home.user_contact') }}"><i class="fas fa-comment-alt"></i><span class="menu-offside-span">@lang('web_menu.local_aside_menu_contact')</span></a></li>
            </ul>
        </nav>
    </div>
</aside>
