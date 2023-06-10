<div>
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1))

        <nav
            class="flex items-center justify-between"
            role="navigation"
            aria-label="Pagination Navigation"
        >
            <div class="flex flex-1 justify-between sm:hidden">
                <span>
                    @if ($paginator->onFirstPage())
                        <span class="btn btn-disabled">
                            {!! __('pagination.previous') !!}
                        </span>
                    @else
                        <button
                            class="btn"
                            type="button"
                            wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            wire:loading.class="btn-disabled"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                        >
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>

                <span>
                    @if ($paginator->hasMorePages())
                        <button
                            class="btn"
                            type="button"
                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            wire:loading.class="btn-disabled"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before"
                        >
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <span class="btn btn-disabled">
                            {!! __('pagination.next') !!}
                        </span>
                    @endif
                </span>
            </div>

            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                <div>
                    <p class="text-base-content text-sm leading-5">
                        <span>{!! __('Showing') !!}</span>
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>

                <div>
                    <span class="join relative z-0 inline-flex rounded-md shadow-sm">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($paginator->onFirstPage())
                                <span
                                    class="btn btn-disabled join-item"
                                    aria-disabled="true"
                                    aria-label="{{ __('pagination.previous') }}"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </span>
                            @else
                                <button
                                    class="btn join-item"
                                    type="button"
                                    aria-label="{{ __('pagination.previous') }}"
                                    wire:click="previousPage('{{ $paginator->getPageName() }}')"
                                    dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                    rel="prev"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                            @endif
                        </span>

                        {{-- Pagination Elements --}}
                        @foreach ($elements as $element)
                            {{-- "Three Dots" Separator --}}
                            @if (is_string($element))
                                <span
                                    class="btn btn-disabled join-item"
                                    aria-disabled="true"
                                >
                                    {{ $element }}
                                </span>
                            @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    <span
                                        wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page{{ $page }}"
                                    >
                                        @if ($page == $paginator->currentPage())
                                            <span
                                                class="btn btn-disabled join-item"
                                                aria-current="page"
                                            >
                                                {{ $page }}
                                            </span>
                                        @else
                                            <button
                                                class="btn join-item"
                                                type="button"
                                                aria-label="{{ __('Go to page :page', ['page' => $page]) }}"
                                                wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                            >
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        @endforeach

                        <span>
                            {{-- Next Page Link --}}
                            @if ($paginator->hasMorePages())
                                <button
                                    class="btn join-item"
                                    type="button"
                                    aria-label="{{ __('pagination.next') }}"
                                    wire:click="nextPage('{{ $paginator->getPageName() }}')"
                                    dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
                                    rel="next"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </button>
                            @else
                                <span
                                    class="btn btn-disabled join-item"
                                    aria-disabled="true"
                                    aria-label="{{ __('pagination.next') }}"
                                    aria-hidden="true"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                </span>
                            @endif
                        </span>
                    </span>
                </div>
            </div>
        </nav>
    @endif
</div>
