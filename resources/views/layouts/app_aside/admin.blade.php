<aside id="offside-m-admin" class="offside">
    <div class="offside-sidebar">
        <nav class="offside-sidebar-nav">
            <ul class="metismenu" id="admin-side-menu">
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_main')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-compass"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_location')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.locale_country') }}">
                                <i class="fas fa-globe-americas"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_countries')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.locale_state') }}">
                                <i class="fas fa-map-marked-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.locale_city') }}">
                                <i class="fas fa-map"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_cities')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-exclamation-circle"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_reg_states')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.status_order') }}">
                                <i class="fas fa-tasks"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_orders_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.status_payment') }}">
                                <i class="fas fa-cash-register"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_pay_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.status_product') }}">
                                <i class="fas fa-heartbeat"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_products_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.status_refund') }}">
                                <i class="fas fa-clipboard-check"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_refunds_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.status_shipping') }}">
                                <i class="fas fa-truck-loading"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_shipping_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.status_user') }}">
                                <i class="fas fa-user-md"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_users_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-car"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_cars_states')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-city"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_properties_states')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-question-circle"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_types')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.type_auction') }}">
                                <i class="fas fa-gavel"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_auctions_types')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.type_event') }}">
                                <i class="fas fa-theater-masks"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_events_types')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.type_identification') }}">
                                <i class="fas fa-search-location"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_identification_types')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.type_payment') }}">
                                <i class="fas fa-hand-holding-usd"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_pay_types')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.type_shipping') }}">
                                <i class="fas fa-luggage-cart"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_shipping_types')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.type_store') }}">
                                <i class="fas fa-store"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_store_types')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.type_transaction') }}">
                                <i class="fas fa-exchange-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_transactions_types')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-calculator"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_payments')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.pay_currency') }}">
                                <i class="fas fa-money-check-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_currency_payments')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pay_tax') }}">
                                <i class="fas fa-receipt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_taxes_payments')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pay_error') }}">
                                <i class="fas fa-exclamation-triangle"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_error_code_payments')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pay_error_avs') }}">
                                <i class="fas fa-credit-card"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_error_avs_code_payments')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.pay_error_cvv') }}">
                                <i class="far fa-credit-card"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_error_cvv_code_payments')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-microscope"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_config_webs')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.config_website') }}">
                                <i class="fas fa-satellite"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_webs')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-user-secret"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_safe_webs')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-users-cog"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_profile')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-users-cog"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_profile_permissions')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_users')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.user_gender') }}">
                                <i class="fas fa-venus-mars"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_gender')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user_relationship') }}">
                                <i class="fas fa-ring"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_relationship')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users') }}">
                                <i class="fas fa-id-card-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_users_sistem')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="fas fa-user-clock"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_sessions')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-newspaper"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_content_static')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.sc_aboutus') }}">
                                <i class="fas fa-child"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_aboutus')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_mision') }}">
                                <i class="fas fa-rocket"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_mision')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_vision') }}">
                                <i class="fas fa-eye"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_vision')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_objective') }}">
                                <i class="fas fa-bomb"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_objective')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_term') }}">
                                <i class="fas fa-balance-scale"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_terms')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_privacy') }}">
                                <i class="fas fa-user-secret"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_privacy')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_intpropierty') }}">
                                <i class="fas fa-graduation-cap"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_intpropierty')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_shipping') }}">
                                <i class="fas fa-dolly"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_shipping')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_return') }}">
                                <i class="fas fa-people-carry"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_return')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_refund') }}">
                                <i class="fas fa-handshake"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_refund')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_cancelation') }}">
                                <i class="fas fa-ban"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_cancelations')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_guarantee') }}">
                                <i class="fas fa-hand-holding-usd"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_guarantee')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_cookie') }}">
                                <i class="fas fa-cookie-bite"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_cookies')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_social') }}">
                                <i class="fas fa-share-alt-square"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_social')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_recharge') }}">
                                <i class="fas fa-donate"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_recharge')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_earn') }}">
                                <i class="fas fa-trophy"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_earn')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_categoriefaq') }}">
                                <i class="fas fa-list"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_categories_faqs')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.sc_faq') }}">
                                <i class="fas fa-question-circle"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_faqs')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.user_plan') }}">
                        <i class="fas fa-shoe-prints"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_menu_plans')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-archive"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_general_catalog')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.cg_brand') }}">
                                <i class="fas fa-ghost"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_brands')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.cg_departament') }}">
                                <i class="fas fa-th-large"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_departaments')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.cg_categorie') }}">
                                <i class="fas fa-th-list"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_categories')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.cg_sub_categorie') }}">
                                <i class="fas fa-list"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_sub_categories')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_stores_sistem')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.user_store') }}">
                                <i class="fas fa-store-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_stores')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user_store_branch') }}">
                                <i class="fas fa-store"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_branch')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user_store_product') }}">
                                <i class="fas fa-gift"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_products')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user_store_cupon') }}">
                                <i class="fas fa-crosshairs"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_cupons')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.user_store_event') }}">
                                <i class="fas fa-theater-masks"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_events')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.user_classified') }}">
                        <i class="fas fa-bullhorn"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_menu_classified')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-hand-peace"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_advertising')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.ads_beacon') }}">
                                <i class="fab fa-bluetooth"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_ads_beacons')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ads_geolocation') }}">
                                <i class="fas fa-satellite-dish"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_ads_geolocation')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ads_web') }}">
                                <i class="fas fa-laptop"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_ads_web')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.user_news') }}">
                        <i class="far fa-newspaper"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_menu_news')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.user_testimonial') }}">
                        <i class="fas fa-comment-alt"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_menu_testimonials')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fas fa-envelope-open-text"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_menu_contacts')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('home') }}">
                        <i class="fas fa-comments"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_menu_items_comments')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-funnel-dollar"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_admin_transactions')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('admin.ac_no_bill') }}">
                                <i class="fas fa-search-dollar"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_no_bill')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ac_no_cart') }}">
                                <i class="fas fa-cart-arrow-down"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_no_cart')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ac_no_order') }}">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_no_order')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ac_no_request') }}">
                                <i class="fas fa-comment-dollar"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_no_request')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ac_order') }}">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_orders')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.ac_recharge_card') }}">
                                <i class="fas fa-credit-card"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_menu_recharge_cards')</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
