@if ($paginator->hasPages())
    <nav
        class="flex justify-between"
        role="navigation"
        aria-label="Pagination Navigation"
    >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="btn btn-disabled">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a
                class="btn"
                href="{{ $paginator->previousPageUrl() }}"
                rel="prev"
            >
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a
                class="btn"
                href="{{ $paginator->nextPageUrl() }}"
                rel="next"
            >
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="btn btn-disabled">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
