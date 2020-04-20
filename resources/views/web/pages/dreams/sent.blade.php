@extends('web.layouts.master')

@section('description', 'Banco de sueños confinados')

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <article class="form-send-article">
                <p>¡Gracias por compartir tu sueño! Lo revisaremos y publicaremos lo antes posible.</p>
            </article>

            <br />

            <div class="btn-wrapper">
                <a class="btn" href="{{ route('homepage') }}">Mientras tanto, sigue leyendo sueños</a>
            </div>

            <br />

            <img class="img-responsive fadeIn wow img-main" src="{{ asset('img/suenosdecuarentena.png') }}">
        </div>
    </div>
@endsection
