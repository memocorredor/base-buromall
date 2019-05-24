<aside id="offside-m-user" class="offside">
    <div class="layout-offside-profile">
        <div class="profile__header" style="background-image: url('{{ asset('imagens/users/picuser.png') }}')"></div>
        <div onclick="location.href = 'urltoprofile';" class="profile__image profile__image-geoff"
            style="background-image: url('{{ asset('imagens/users/default-user.png') }}')"></div>
        <div class="profile__info">
            <div class="details">
                <span class="details__text-header">{{ $user_sis['name'] . ' ' . $user_sis['lastname'] }}</span>
                <span class="details__text-subheader">{{ '@' . $user_sis['username'] }}</span>
            </div>
            <div class="profile__info__section-3">
                <div class="details-bottom">
                    <span class="details__number">{{ $user_sis['count_friends'] }}</span>
                    <span class="details__text">@lang('web_layout.local_friends')</span>
                </div>
            </div>
            <div class="profile__info__section-3">
                <div class="details-bottom">
                    <span class="details__number">{{ $user_sis['count_stores'] }}</span>
                    <span class="details__text">@lang('web_menu.local_menu_stores')</span>
                </div>
            </div>
            <div class="profile__info__section-3">
                <div class="details-bottom">
                    <span class="details__number">{{ $user_sis['count_products'] }}</span>
                    <span class="details__text">@lang('web_menu.local_menu_products')</span>
                </div>
            </div>
        </div>
    </div>
    <div class="offside-sidebar">
        <nav class="offside-sidebar-nav">
            <ul class="metismenu" id="user-side-menu">
                <li>
                    <a href="{{ route('home', Auth::user()->username) }}">
                        <i class="fas fa-user"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_info')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_friends', Auth::user()->username) }}">
                        <i class="fas fa-user-friends"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_friends')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_edit', Auth::user()->username) }}">
                        <i class="fas fa-user-cog"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_config_info')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_notifications', Auth::user()->username) }}">
                        <i class="fas fa-user-shield"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_notify')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="fas fa-concierge-bell"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_to_sale')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('profile.user_store') }}">
                                <i class="fas fa-store-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_stores')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.user_branch') }}">
                                <i class="fas fa-store"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_branch')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.user_product') }}">
                                <i class="fas fa-gift"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_products')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.user_cupon') }}">
                                <i class="fas fa-crosshairs"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_cupons')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.user_event') }}">
                                <i class="fas fa-ticket-alt"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_events')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('profile.user_classified') }}">
                        <i class="fas fa-bullhorn"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_classified')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_wallet', Auth::user()->id) }}">
                        <i class="fas fa-wallet"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_wallet')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_cart', Auth::user()->id) }}">
                        <i class="fas fa-shopping-cart"></i>
                            <span class="menu-offside-span">@lang('web_menu.local_aside_profile_cart')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_auction', Auth::user()->id) }}">
                        <i class="fas fa-gavel"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_auction')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_status_shipping', Auth::user()->id) }}">
                        <i class="fas fa-truck-loading"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_stat_prod')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_buy_recurrent', Auth::user()->id) }}">
                        <i class="fas fa-business-time"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_buy_recu')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_whishlist', Auth::user()->id) }}">
                        <i class="fas fa-hat-wizard"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_whishlist')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.user_invitations', Auth::user()->id) }}">
                        <i class="fas fa-podcast"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_invitations')</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)">
                        <i class="fas fa-funnel-dollar"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_transactions')</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('profile.transaction_buy', Auth::user()->id) }}">
                                <i class="fas fa-donate"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_tran_buy')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.transaction_sale', Auth::user()->id) }}">
                                <i class="fas fa-cash-register"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_tran_sale')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.transaction_ofer', Auth::user()->id) }}">
                                <i class="fas fa-comment-dollar"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_tran_ofer')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.transaction_points', Auth::user()->id) }}">
                                <i class="fas fa-award"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_tran_points')</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.transaction_resume', Auth::user()->id) }}">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <span class="menu-offside-span">@lang('web_menu.local_aside_profile_tran_resume')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('profile.user_entrys', Auth::user()->id) }}">
                        <i class="fas fa-eye"></i>
                        <span class="menu-offside-span">@lang('web_menu.local_aside_profile_entrys')</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
