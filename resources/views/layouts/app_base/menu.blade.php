<nav class="layout-header-menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0">
                <button class="header-menu-button float-left" onclick="location.href = '{{ url('/') }}';">
                    <div class="header-menu-icon"><i class="fas fa-home fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_home')
                    </div>
                </button>
                <button class="header-menu-button float-left offside-op-menu">
                    <div class="header-menu-icon"><i class="far fa-window-restore fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu')
                    </div>
                </button>
                <button class="header-menu-button float-left offside-op-categories">
                    <div class="header-menu-icon"><i class="fas fa-tag fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_categories')
                    </div>
                </button>
            </div>
            <div class="col-md-6 px-0">
                <button class="header-menu-button float-right offside-op-infouser">
                    <div class="header-menu-icon"><i class="fas fa-exclamation-circle fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_infouser')
                    </div>
                </button>
                @guest
                <button class="header-menu-button float-right" onclick="location.href = '{{ route('login') }}';">
                    <div class="header-menu-icon"><i class="fas fa-user-circle fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_login')
                    </div>
                </button>
                @if (Route::has('register'))
                <button class="header-menu-button float-right" onclick="location.href = '{{ route('register') }}';">
                    <div class="header-menu-icon"><i class="far fa-id-card fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_register')
                    </div>
                </button>
                @endif
                @else
                <button class="header-menu-button float-right" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                    <div class="header-menu-icon"><i class="fas fa-user-times  fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_loginout')
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </button>
                <button class="header-menu-button float-right offside-op-user">
                    <div class="header-menu-icon"><i class="fas fa-id-card-alt fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_user')
                    </div>
                </button>

                <button class="header-menu-button float-right offside-op-admin">
                    <div class="header-menu-icon"><i class="fas fa-user-cog fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_admin')
                    </div>
                </button>
                <button class="header-menu-button float-right offside-op-crm">
                    <div class="header-menu-icon"><i class="fas fa-user-shield fa-2x"></i></div>
                    <div class="header-menu-text">
                        @lang('web_menu.local_header_menu_crm')
                    </div>
                </button>
                @endguest
            </div>
        </div>
    </div>
</nav>
