@extends('web.layouts.master')

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
                <p>No hay sueños de lo que buscas, ¡quizá deberías compartir el tuyo!</p>
            @endif
        </section>

        @if ($dreams->hasPages())
            <div class="col-md-12 col-sm-12 col-xs-12">
                {{ $dreams->links() }}
            </div>
        @endif
    </div>

    <br />

    <div class="btn-wrapper">
        <a class="btn" href="{{ route('dreams.create') }}">Enviar un sueño</a>
    </div>

    <br />

    <img class="img-responsive fadeIn wow img-main" src="{{ asset('img/suenosdecuarentena.png') }}">
@endsection
