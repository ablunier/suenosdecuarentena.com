@extends('web.layouts.master')

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
    </div>
@endsection
