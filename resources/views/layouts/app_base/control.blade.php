<nav class="layout-header-control">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <ul class="header-control-social list-inline float-left">
                    @if ($meta_sis["facebook_enable"] === 1)
                    <li class="header-control-li list-inline-item float-left">
                        <a class="header-control-icon" href="{{ $meta_sis["facebook"] }}">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    @endif
                    @if($meta_sis["twitter_enable"] === 1)
                    <li class="header-control-li list-inline-item float-left">
                        <a class="header-control-icon" href="{{ $meta_sis["twitter"] }}">
                            <i class="fab fa-twitter-square"></i>
                        </a>
                    </li>
                    @endif
                    @if ($meta_sis["instagram_enable"] === 1)
                    <li class="header-control-li list-inline-item float-left">
                        <a class="header-control-icon" href="{{ $meta_sis["instagram"] }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    @endif
                    @if ($meta_sis["pinterest_enable"] === 1)
                    <li class="header-control-li list-inline-item float-left">
                        <a class="header-control-icon" href="{{ $meta_sis["pinterest"] }}">
                            <i class="fab fa-pinterest-square"></i>
                        </a>
                    </li>
                    @endif
                    @if ($meta_sis["youtube_enable"] === 1)
                    <li class="header-control-li list-inline-item float-left">
                        <a class="header-control-icon" href="{{ $meta_sis["youtube"] }}">
                            <i class="fab fa-youtube-square"></i>
                        </a>
                    </li>
                    @endif
                    @if ($meta_sis["linkedin_enable"] === 1)
                    <li class="header-control-li list-inline-item float-left">
                        <a class="header-control-icon" href="{{ $meta_sis["linkedin"] }}">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="col-md-6 px-0">
                <ul class="header-control-flag list-inline float-right">
                    <li class="header-control-li list-inline-item float-right">
                        <div class="header-control-text">
                            @if (App::getLocale() == 'es')
                            <span>
                                @lang('web_layout.local_lang_es')
                            </span>
                            @endif
                            @if (App::getLocale() == 'pt')
                            <span>
                                @lang('web_layout.local_lang_pt')
                            </span>
                            @endif
                            @if (App::getLocale() == 'en')
                            <span>
                                @lang('web_layout.local_lang_en')
                            </span>
                            @endif
                        </div>
                    </li>
                    <li class="header-control-li list-inline-item float-right">
                        <a class="header-control-flag-img" href="{{ route('lang-route', 'es') }}">
                            <img class=" mx-auto d-block @if (App::getLocale() == 'es') {{ 'locale-shadow-flag' }} @endif "
                                src="{{ asset('imagens/flags/Colombia.png') }}" alt="Bandera - Colombia" />
                        </a>
                    </li>
                    <li class="header-control-li list-inline-item float-right">
                        <a class="header-control-flag-img" href="{{ route('lang-route', 'pt') }}">
                            <img class=" mx-auto d-block @if (App::getLocale() == 'pt') {{ 'locale-shadow-flag' }} @endif "
                                src="{{ asset('imagens/flags/Brazil.png') }}" alt="Bandera - Brazil" />
                        </a>
                    </li>
                    <li class="header-control-li list-inline-item float-right">
                        <a class="header-control-flag-img" href="{{ route('lang-route', 'en') }}">
                            <img class=" mx-auto d-block @if (App::getLocale() == 'en') {{ 'locale-shadow-flag' }} @endif "
                                src="{{ asset('imagens/flags/United-States-of-America.png') }}"
                                alt="Bandera - Estados Unidos" />
                        </a>
                    </li>
                    <li class="header-control-li list-led float-right">
                        <div class="header-control-led">
                            <div class="led-box">
                                <div id="status-conect-ws" class="led-status"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
