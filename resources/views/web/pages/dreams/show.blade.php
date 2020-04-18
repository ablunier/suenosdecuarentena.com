@extends('web.layouts.master')

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <article>
        Soño
    </article>

    <img class="img-responsive fadeIn wow img-main" src="{{ asset('img/suenosdecuarentena.png') }}">

    @include('web.partials.search-form')
@endsection
