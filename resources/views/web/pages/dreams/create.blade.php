@extends('web.layouts.master')

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <article class="form-send-article">
        <div class="row">
            <form class="form-send col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label for="">Tu nombre o el de tu yo soñador</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>

                <div class="form-group">
                    <label for="">Ciudad donde estás confinadx</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>

                <div class="form-group">
                    <label for="">Fecha aproximada, aquí todxs hemos perdido la noción del tiempo</label>
                    <input type="text" class="form-control" id="" placeholder="">
                </div>

                <div class="form-group">
                    <label for="">A ver, qué soñaste?</label>
                    <textarea class="form-control" id=""></textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="">
                    <label class="form-check-label" for="">Aunque fuera en sueños, he leído y acepto las condiciones</label>
                </div>

                <button type="submit" class="btn">Enviar sueño</button>
            </form>
        </div>
    </article>
@endsection
