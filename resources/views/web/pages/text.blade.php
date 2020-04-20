@extends('web.layouts.master')

@section('description', __('messages.description'))

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <article class="ml-text">
                <p>{!! $text->getAttribute('content_'.app()->getLocale()) !!}</p>
            </article>

            <div class="btn-wrapper">
                <a class="btn" href="{{ route('dreams.create') }}">{{ __('messages.send-dream') }}</a>
            </div>

            <img class="img-responsive fadeIn wow img-main has-margin-top" src="{{ asset('img/suenosdecuarentena.png') }}">
        </div>
    </div>
@endsection
