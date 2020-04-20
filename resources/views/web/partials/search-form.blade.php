<div class="ml-form-wrapper row">
    <div class="col-md-9 col-sm-9 col-xs-12">
        <form class="search-form" action="{{ route('dreams.search') }}" method="get" autocomplete="off">
            <input class="search-input" type="search" name="q" value="{{ request()->get('q') }}">
            <button class="btn-search" type="submit">{{ __('messages.search') }}</button>
        </form>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="btn-wrapper">
            <a href="{{ route('dreams.random') }}" class="btn btn-secondary">{{ __('messages.random') }}</a>
        </div>
    </div>

    @if (request()->has('q'))
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="link-reset-wrapper">
                <a href="{{ route('homepage') }}" class="link-reset">{{ __('messages.search-feedback', ['keyword' => request()->get('q')]) }}<span>x</span></a>
            </div>
        </div>
    @endif
</div>
