@extends('web.layouts.master')

@section('description', 'Banco de sueños confinados')

@section('header')
    @include('web.partials.header-simple')
@endsection

@section('content')
    <article class="form-send-article">
        <div class="row">
            <form method="post" action="{{ route('dreams.post') }}" class="form-send col-md-12 col-sm-12 col-xs-12">
                @csrf

                <div class="form-group">
                    <label for="owner-name">Tu nombre o el de tu yo soñador (si quieres compartirlo)</label>
                    <input type="text" name="owner_name" class="form-control" id="owner-name-input">
                </div>

                <div class="form-group">
                    <label for="location-input">Ciudad donde estás confinadx</label>
                    <input type="text" name="location" class="form-control" id="location-input" required>
                </div>

                <div class="form-group">
                    <label for="date-input">Fecha aproximada, aquí todxs hemos perdido la noción del tiempo</label>
                    <input type="date" name="date" class="form-control" id="date-input" required>
                </div>

                <div class="form-group">
                    <label for="description-textarea">A ver, qué soñaste?</label>
                    <textarea name="description" class="form-control" id="description-textarea" required></textarea>
                </div>

                <div class="form-check">
                    <input type="checkbox" name="legal" class="form-check-input" id="legal-input" required>
                    <label class="form-check-label" for="legal-input">Aunque sea en sueños, acepto que lo que envío sólo será publicado con previa revisión para anonimizar lo compartido</label>
                </div>

                <button type="submit" class="btn">Enviar sueño</button>
            </form>
        </div>
    </article>
@endsection
