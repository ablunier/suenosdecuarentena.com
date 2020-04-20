@extends('web.layouts.master')

@section('description', 'Banco de sueños confinados')

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
            @endif
        </section>

        @if ($dreams->hasPages())
            <div class="col-md-12 col-sm-12 col-xs-12">
                {{ $dreams->links() }}
            </div>
        @endif
    </div>
@endsection
