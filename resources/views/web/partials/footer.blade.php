<footer class="footer-main">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <img class="img-responsive logo-footer" src="{{ asset('img/logo-sm.svg') }}">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ul class="menu-list-footer">
                    <li><a href="{{ route('about') }}">{{ __('messages.about') }}</a></li>
                    <li>
                        <a href="{{ $changeLangLink }}">
                            {{ $changeLangText }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="credits">
                    {{ __('messages.credits') }} <a href="https://laboratorio.numax.org" target="_blank">Adrián P. Blunier</a> {{ __('messages.and') }} <a href="http://aymaraghiglione.com/" target="_blank">Aymará Ghiglione</a>.</p>
            </div>
        </div>
    </div>
</footer>
