<aside id="offside-m-infouser" class="offside">
    <div class="layout-offside-info-user">
        <div class="row">
            <div class="col no-gutters">
                <div class="info-user-title">
                    <h4>
                        <i class="fas fa-user-astronaut"></i>@lang('web_layout.local_aside_info_user_title')
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user">
                    <span class="data-user-info">
                        <i class="fas fa-universal-access"></i>
                        @lang('web_layout.local_aside_info_user_id'):
                    </span>
                    <span class="data-user-txt-uuid">{{ $user_sis['session_id'] }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user">
                    <span class="data-user-info">
                        <i class="fas fa-map-signs"></i>
                        @lang('web_layout.local_aside_info_user_ip'):
                    </span>
                    <span class="data-user-txt">{{ $user_sis['session_ip'] }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user">
                    <span class="data-user-info">
                        <i class="fas fa-user-shield"></i>
                        @lang('web_layout.local_aside_info_user_name'):
                    </span>
                    <span class="data-user-txt">{{ $user_sis['session_name'] }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user">
                    <span class="data-user-info">
                        <i class="fas fa-laptop"></i>
                        @lang('web_layout.local_aside_info_user_name_compu'):
                    </span>
                    <span class="data-user-txt">{{ $user_sis['session_cuser'] }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user">
                    <span class="data-user-info">
                        <i class="fas fa-user-clock"></i>
                        @lang('web_layout.local_aside_info_user_date_ini'):
                    </span>
                    <span class="data-user-txt">{{ $user_sis['session_created'] }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user">
                    <span class="data-user-info">
                        <i class="fas fa-stopwatch"></i>
                        @lang('web_layout.local_aside_info_user_date_end'):
                    </span>
                    <span class="data-user-txt">{{ $user_sis['session_end'] }}</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col no-gutters">
                <div class="data-user_count">
                    <div class="data-user_time">
                        <div id="data-count-sess" style="display: none;">

                            <div id="countdown">
                                <div class="num_ses_count">
                                    <div class="num_ses_count_num" id="days_s_count"></div>
                                    <div class="num_ses_count_txt">@lang('web_layout.local_days')</div>
                                </div>
                                <div class="num_ses_count">
                                    <div class="num_ses_count_num" id="hrs_s_count"></div>
                                    <div class="num_ses_count_txt">@lang('web_layout.local_hours')</div>
                                </div>
                                <div class="num_ses_count">
                                    <div class="num_ses_count_num" id="min_s_count"></div>
                                    <div class="num_ses_count_txt">@lang('web_layout.local_minuts')</div>
                                </div>
                                <div class="num_ses_count">
                                    <div class="num_ses_count_num" id="sec_s_count"></div>
                                    <div class="num_ses_count_txt">@lang('web_layout.local_seconds')</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav-tabs nav">
            <!-- navigation menu items -->
            <li class="nav-item">
                <a href="#aside-user-a" data-toggle="tab" class="active nav-link">
                    <i class="fas fa-user-tag"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#aside-user-b" data-toggle="tab" class="nav-link">
                    <i class="fab fa-{{ $user_sis['browser_user_fa'] }}"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#aside-user-c" data-toggle="tab" class="nav-link">
                    <i class="fas fa-fire-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="#aside-user-d" data-toggle="tab" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"></i>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="aside-user-a" class="tab-pane active container">
                <div class="row">
                    <div class="col no-gutters">
                        <div class="info-user-title">
                            <h4>
                                <i class="fas fa-user-tag"></i>
                                @lang('web_layout.local_aside_info_user_info_user')
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-calendar"></i>
                                @lang('web_layout.local_aside_info_user_timezone'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['timezone'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-user-ninja"></i>
                                @lang('web_layout.local_aside_info_user_tipe_visitor'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['type_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-thumbtack"></i>
                                @lang('web_layout.local_aside_info_timezone_user'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['timezone_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-globe"></i>
                                @lang('web_layout.local_aside_info_continent'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['continent_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-flag"></i>
                                @lang('web_layout.local_aside_info_countrie'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['countrie_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-map-pin"></i>
                                @lang('web_layout.local_aside_info_countrie_code'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['countrie_code_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-map-marker-alt"></i>
                                @lang('web_layout.local_aside_info_state'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['state_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-map-marker"></i>
                                @lang('web_layout.local_aside_info_city'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['city_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-compass"></i>
                                @lang('web_layout.local_aside_info_latitude'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['latitude_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-compass"></i>
                                @lang('web_layout.local_aside_info_longitude'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['longitude_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-phone-square"></i>
                                @lang('web_layout.local_aside_info_area_code'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['area_code_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-envelope"></i>
                                @lang('web_layout.local_aside_info_zipcode'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['zip_code_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-money-bill-wave"></i>
                                @lang('web_layout.local_aside_info_currency_code'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['code_currency_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-dollar-sign"></i>
                                @lang('web_layout.local_aside_info_currency_sale'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['currency_user_sale'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-project-diagram"></i>
                                @lang('web_layout.local_aside_info_user_isp'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['isp_user'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="aside-user-b" class="tab-pane container">
                <div class="row">
                    <div class="col no-gutters">
                        <div class="info-user-title">
                            <h4>
                                <i class="fab fa-{{ $user_sis['browser_user_fa'] }}"></i>
                                @lang('web_layout.local_aside_info_user_browser_user')
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-language"></i>
                                @lang('web_layout.local_aside_info_user_browser_local'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['browser_locale'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fab fa-{{ $user_sis['browser_user_fa'] }}"></i>
                                @lang('web_layout.local_aside_info_user_browser'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['browser_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fab fa-{{ $user_sis['browser_user_fa'] }}"></i>
                                @lang('web_layout.local_aside_info_user_browser_ver'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['browser_version_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-hdd"></i>
                                @lang('web_layout.local_aside_info_user_sistem'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['user_sistem'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-server"></i>
                                @lang('web_layout.local_aside_info_user_sistem_ver'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['version_sis_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-laptop"></i>
                                @lang('web_layout.local_aside_info_user_is64'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['is64_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-robot"></i>
                                @lang('web_layout.local_aside_info_user_isrobot'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['isrobot_user'] }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col no-gutters">
                        <div class="data-user">
                            <span class="data-user-info">
                                <i class="fas fa-mobile"></i>
                                @lang('web_layout.local_aside_info_user_ismobil'):
                            </span>
                            <span class="data-user-txt">{{ $user_sis['ismobil_user'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="aside-user-c" class="tab-pane container">
                <div class="row">
                    <div class="col no-gutters">
                        <div class="info-user-title">
                            <h4>
                                <i class="fas fa-fire-alt"></i>
                                @lang('web_layout.local_aside_info_user_history')
                            </h4>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Para tablas de datos -->
                </div>
            </div>
            <div id="aside-user-d" class="tab-pane container">
                <div class="row">
                    <div class="col no-gutters">
                        <div class="info-user-title">
                            <h4>
                                <i class="fas fa-chalkboard-teacher"></i>
                                @lang('web_layout.local_aside_info_user_web_sistem')
                            </h4>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Para tablas de datos -->
                </div>
            </div>
        </div>
    </div>
</aside>
