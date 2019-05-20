<meta name="description" content="{{ $meta_sis['description'] }}">
<meta name="keywords" content="{{ $meta_sis['keywords'] }}">
<meta name="author" content="{{ $meta_sis['author'] }}">
<meta name="robots" content="{{ $meta_sis['robots'] }}">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="{{ '@'.$meta_sis['name_page'] }}">
<meta name="twitter:title" content="{{ $meta_sis['title'] }}">
<meta name="twitter:description" content="{{ $meta_sis['description'] }}">
<meta name="twitter:creator" content="@memocorredor">
<meta name="twitter:image" content="{{ asset('assets/app_default/logos/web-logo.png') }}">

<!-- Open Graph data -->
<meta property="og:title" content="{{ $meta_sis['title'] }}" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://{{ $meta_sis['url_web'] }}" />
<meta property="og:image" content="{{ asset('assets/app_default/logos/web-logo.png') }}" />
<meta property="og:description" content="{{ $meta_sis['description'] }}" />
<meta property="og:site_name" content="{{ $meta_sis['name_page'] }}" />
<meta property="fb:admins" content="903560009757855" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
