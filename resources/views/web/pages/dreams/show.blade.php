@extends('web.layouts.master')

@section('description', \Illuminate\Support\Str::limit($dream->tagless_description, 80))

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <article class="ml-dream">
        <time class="dream-date" datetime="{{ $dream->dreamed_on->toDateTimeString() }}">
            {{ $dream->dreamed_on->isoFormat('D [de] MMMM [de] Y') }}
        </time>
        @if ($dream->location)
            <span class="dream-place">{{ $dream->location->name }}</span>
        @endif
        @if ($dream->owner_name)
            <span class="dream-author">{{ $dream->owner_name }}</span>
        @else
            <span class="dream-author">Anónimo</span>
        @endif

        <div class="dream-body">
            {!! $dream->description !!}
        </div>
    </article>

    @include('web.partials.search-form')

    <img class="img-responsive fadeIn wow img-main has-margin-top" src="{{ asset('img/suenosdecuarentena.png') }}">

    <div class="btn-wrapper has-margin-top">
        <a class="btn" href="{{ route('dreams.create') }}">{{ __('messages.send-dream') }}</a>
    </div>
@endsection
