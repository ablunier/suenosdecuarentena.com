@extends('web.layouts.master')

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <article class="ml-text">
                <p>¿Qué tenemos en común cuando soñamos? ¿Qué dicen de nosotrxs estos sueños confinados? ¿Es posible crear un relato colectivo a partir de ellos? En estos días que nuestros cuerpos han de permanecer distantes, esta colección de relatos oníricos no pretende más que eso, juntar de algún modo palabras que intentan narrar algo que se nos escapa.</p>
            </article>

            <div class="btn-wrapper">
                <a class="btn" href="#">Enviar un sueño</a>
            </div>
        </div>
    </div>
@endsection
