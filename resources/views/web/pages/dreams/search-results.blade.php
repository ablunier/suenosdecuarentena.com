@extends('web.layouts.master')

@section('description', __('messages.description'))

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    @include('web.partials.search-form')

    <div class="row">
        <section class="ml-dreams-list col-md-12 col-sm-12 col-xs-12">
            @if ($dreams->isNotEmpty())
                <ul class="dreams-list">
                    @foreach ($dreams as $dream)
                        <li>
                            @include('web.partials.dream.summary')
                        </li>
                    @endforeach
                </ul>
            @else
                <p>{{ __('messages.no-results') }}</p>
            @endif
        </section>

        @if ($dreams->hasPages())
            <div class="col-md-12 col-sm-12 col-xs-12">
                {{ $dreams->links() }}
            </div>
        @endif
    </div>

    <img class="img-responsive fadeIn wow img-main has-margin-top" src="{{ asset('img/suenosdecuarentena.png') }}">

    <div class="btn-wrapper has-margin-top">
        <a class="btn" href="{{ route('dreams.create') }}">{{ __('messages.send-dream') }}</a>
    </div>
@endsection
