<div>
    @if ($paginator->hasPages())
        <nav
            class="flex justify-between"
            role="navigation"
            aria-label="Pagination Navigation"
        >
            <span>
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="btn btn-disabled">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    @if (method_exists($paginator, 'getCursorName'))
                        <button
                            class="btn"
                            type="button"
                            dusk="previousPage"
                            wire:click="setPage('{{ $paginator->previousCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                            wire:loading.attr="disabled"
                            wire:loading.class="btn-disabled"
                        >
                            {!! __('pagination.previous') !!}
                        </button>
                    @else
                        <button
                            class="btn"
                            type="button"
                            wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            wire:loading.class="btn-disabled"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        >
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                @endif
            </span>

            <span>
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    @if (method_exists($paginator, 'getCursorName'))
                        <button
                            class="btn"
                            type="button"
                            dusk="nextPage"
                            wire:click="setPage('{{ $paginator->nextCursor()->encode() }}','{{ $paginator->getCursorName() }}')"
                            wire:loading.attr="disabled"
                            wire:loading.class="btn-disabled"
                        >
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <button
                            class="btn"
                            type="button"
                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            wire:loading.class="btn-disabled"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        >
                            {!! __('pagination.next') !!}
                        </button>
                    @endif
                @else
                    <span class="btn btn-disabled">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
