<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = yes">

    <title>{{ __('messages.name') }}</title>
    <meta name="description" content="@yield('description')">

    <meta property="og:title" content="{{ __('messages.name') }}" />
    <meta property="og:url" content="{{ Request::url() }}">
    <meta name="image" content="{{ asset('img/share-'.app()->getLocale().'.jpg') }}" />
    <meta property="og:image" content="{{ asset('img/share-'.app()->getLocale().'.jpg') }}" />
    <meta property="og:description" content="@yield('description')">
    <link rel="image_src" href="{{ asset('img/share-'.app()->getLocale().'.jpg') }}" />
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="photo" />
    <meta name="twitter:title" content="{{ __('messages.name') }}" />
    <meta name="twitter:image" content="{{ asset('img/share-'.app()->getLocale().'.jpg') }}" />

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="is-lang-{{ app()->getLocale() }}">
    <div class="wrapper">
        @section('header')
            @include('web.partials.header')
        @show

        <main>
            @yield('content')
        </main>
    </div>

    @section('footer')
        @include('web.partials.footer')
    @show

    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>
</body>
</html>
