<div class="ml-form-wrapper row">
    <div class="col-md-9 col-sm-9 col-xs-12">
        <form class="search-form" action="{{ route('dreams.search') }}" method="get" autocomplete="off">
            <input class="search-input" type="search" name="q" value="{{ request()->get('q') }}">
            <button class="btn-search" type="submit">Buscar</button>
        </form>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="btn-wrapper">
            <a href="{{ route('dreams.random') }}" class="btn btn-secondary">Random</a>
        </div>
    </div>

    @if (request()->has('q'))
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="link-reset-wrapper">
                <a href="{{ route('homepage') }}" class="link-reset">Buscando sueños sobre "{{ request()->get('q') }}"<span>x</span></a>
            </div>
        </div>
    @endif
</div>
