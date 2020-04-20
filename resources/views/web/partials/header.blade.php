<header class="header-main bounceInDown wow">
    <a href="{{ route('homepage') }}">
        <h1 class="site-logo image">{{ __('messages.name') }}</h1>
    </a>

    <div class="btn-wrapper">
        <a class="btn" href="{{ route('dreams.create') }}">{{ __('messages.send-dream') }}</a>
    </div>

    <img class="img-responsive fadeIn wow img-main" src="{{ asset('img/suenosdecuarentena.png') }}">
</header>
