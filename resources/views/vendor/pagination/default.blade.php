@if ($paginator->hasPages())
    <nav class="pagination-wrapper">
        <ul class="pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="previous disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#">@lang('pagination.previous')</a>
                </li>
            @else
                <li>
                    <a class="previous" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        @lang('pagination.previous')
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><a href="#">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class="next" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        @lang('pagination.next')
                    </a>
                </li>
            @else
                <li class="next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a href="#">@lang('pagination.next')</a>
                </li>
            @endif
        </ul>
    </nav>
@endif
