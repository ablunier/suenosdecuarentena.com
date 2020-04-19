@extends('web.layouts.master')

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
        @endif

        <div class="dream-body">
            {!! $dream->description !!}
        </div>
    </article>

    <div class="btn-wrapper">
        <a class="btn" href="{{ route('dreams.create') }}">Enviar un sueño</a>
    </div>
@endsection
