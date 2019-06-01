<footer class="layout-footer">
    <div class="container-fluid">
        <div class="container-footer-social-links">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h5>@lang('web_menu.local_aside_menu_content_static')</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href='{{ route('home.sc_aboutus') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_aboutus')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_mision') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_mision')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_vision') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_vision')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_objective') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_objective')
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h5>@lang('web_layout.local_footer_terms_polic')</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href='{{ route('home.sc_term') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_terms')
                            </a>
                        </li>
                        <li><a href='{{ route('home.sc_privacy') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_privacy')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_return') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_return')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_shipping') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_shipping')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_cookies') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_cookies')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_social') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_social')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_intpropierty') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_intpropierty')
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <h5>@lang('web_layout.local_footer_help')</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <a href='{{ route('home.user_contact') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_aside_menu_contact')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.sc_faqs') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_faqs')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.user_plan') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_aside_menu_plans')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.user_store') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_stores')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('home.user_product') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_menu.local_menu_products')
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <h5>@lang('web_layout.local_footer_user')</h5>
                    <ul class="list-unstyled quick-links">
                        <li>
                            <div class="layout-footer-counter">
                                <i class="fas fa-users"></i>
                                @lang('web_layout.local_users_footer')
                                <user-counter></user-counter>
                            </div>
                        </li>
                        @guest
                        <li>
                            <a href='{{ route('login') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_auth.login')
                            </a>
                        </li>
                        <li>
                            <a href='{{ route('register') }}' itemprop="significantLink">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_auth.register')
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('logout') }}" itemprop="significantLink" onclick="event.preventDefault();
                                        document.getElementById('logout-form-footer').submit();">
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                @lang('web_auth.logout')
                            </a>
                        </li>
                        <form id="logout-form-footer" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-footer-social">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h5>@lang('web_layout.local_footer_contact')</h5>
                    <address class="container-footer-social-info">
                        <dl class="contact-list">
                            <dt>@lang('web_layout.local_email'):</dt>
                            <dd><a href="mailto:{{ $meta_sis["email"] }}">{{ $meta_sis["email"] }}</a></dd>
                        </dl>
                        <dl class="contact-list">
                            <dt>@lang('web_layout.local_phone'):</dt>
                            <dd>{{ $meta_sis["areacode"] . ' - ' . $meta_sis["mobile"] }}</dd>
                        </dl>
                        <dl class="contact-list">
                            <dt>@lang('web_layout.local_address'):</dt>
                            <dd>{{ $meta_sis["address"] }}</dd>
                        </dl>
                    </address>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h5>social</h5>
                    <ul class="list-unstyled list-inline social text-center">

                    </ul>
                </div>
            </div>
        </div>
        <div class="container-footer-logos">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 px-0">
                    <h5>@lang('web_layout.local_footer_social')</h5>
                    <ul class="list-unstyled list-inline social text-center">
                        @if ($meta_sis["facebook_enable"] === 1)
                        <li class="list-inline-item">
                            <a href="{{ $meta_sis["facebook"] }}">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        @endif
                        @if($meta_sis["twitter_enable"] === 1)
                        <li class="list-inline-item">
                            <a href="{{ $meta_sis["twitter"] }}">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        @endif
                        @if ($meta_sis["instagram_enable"] === 1)
                        <li class="list-inline-item">
                            <a href="{{ $meta_sis["instagram"] }}">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        @endif
                        @if ($meta_sis["pinterest_enable"] === 1)
                        <li class="list-inline-item">
                            <a href="">
                                <i class="fab fa-pinterest-square"></i>
                            </a>
                        </li>
                        @endif
                        @if ($meta_sis["youtube_enable"] === 1)
                        <li class="list-inline-item">
                            <a href="{{ $meta_sis["youtube"] }}">
                                <i class="fab fa-youtube-square"></i>
                            </a>
                        </li>
                        @endif
                        @if ($meta_sis["linkedin_enable"] === 1)
                        <li class="list-inline-item">
                            <a href="{{ $meta_sis["linkedin"] }}">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 px-0">
                    <h5>@lang('web_layout.local_footer_pay')</h5>
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><i class="fab fa-cc-visa"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cc-mastercard"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cc-diners-club"></i></li>
                        <li class="list-inline-item"><i class="fab fa-cc-amex"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <section class="layout-footer-copyright">
                <i class="d-inline-block fas fa-copyright" role="copyright"></i>
                {{ date('Y') . '  - ' . $meta_sis['copyright'] . '  - ' }}
                <address class="d-inline-block footer-address" role="company address"></address>
                <span class="d-inline-block footer-bottom-rights">
                    @lang('web_layout.local_footer_copyright').
                </span>
            </section>
        </div>
    </div>
</footer>
