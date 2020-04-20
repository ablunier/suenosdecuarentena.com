@extends('web.layouts.master')

@section('description', __('messages.description'))

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <article class="form-send-article">
        <div class="row">
            <form method="post" action="{{ route('dreams.post') }}" class="form-send col-md-12 col-sm-12 col-xs-12">
                @csrf

                <div class="form-group">
                    <label for="owner-name">{{ __('messages.dream-owner-name') }}</label>
                    <input type="text" name="owner_name" class="form-control" id="owner-name-input">
                </div>

                <div class="form-group">
                    <label for="location-input">{{ __('messages.dream-location') }}</label>
                    <input type="text" name="location" class="form-control" id="location-input" required>
                </div>

                <div class="form-group">
                    <label for="date-input">{{ __('messages.dream-date') }}</label>
                    <input type="date" name="date" class="form-control" id="date-input" required>
                </div>

                <div class="form-group">
                    <label for="description-textarea"></label>
                    <textarea name="description" class="form-control" id="description-textarea" required></textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" name="legal" class="form-check-input" id="legal-input" required>
                    <label class="form-check-label" for="legal-input">Aunque sea en sueños, acepto que lo que envío sólo será publicado con previa revisión para anonimizar lo compartido</label>
                </div>

                <button type="submit" class="btn">{{ __('messages.send-dream') }}</button>
            </form>
        </div>
    </article>
@endsection
