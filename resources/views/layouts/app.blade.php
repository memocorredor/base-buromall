<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $meta_sis['title'] }}</title>
    @include('layouts.app_common.metatags')
    @include('layouts.app_common.heads')
</head>

<body>
    <div id="app">
        @include('layouts.app_aside.menu')
        @include('layouts.app_aside.categories')
        @if (Auth::check())
        @include('layouts.app_aside.admin')
        @include('layouts.app_aside.user')
        @endif
        @include('layouts.app_aside.crm')
        @include('layouts.app_aside.infouser')
        <div id="offside">
            <div class="site-overlay"></div>
            <header>
                @include('layouts.app_base.logo')
                @include('layouts.app_base.menu')
                @include('layouts.app_base.control')
                @include('layouts.app_base.anunce')
            </header>
            <main>
                @yield('content')
            </main>
            @include('layouts.app_base.footer')
        </div>
    </div>
    @include('layouts.app_common.scripts')
    @include('layouts.app_common.sweet_delete')
    @include('layouts.app_common.anunces')
</body>

</html>
