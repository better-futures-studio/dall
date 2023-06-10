@if ($paginator->hasPages())
    <nav
        class="border-base-content/50 flex items-center justify-between border-t px-4 py-3 sm:px-6"
        role="navigation"
        aria-label="Pagination Navigation"
    >
        <div class="flex flex-1 justify-between sm:hidden">
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
        </div>

        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-base-content text-sm leading-5">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div>

            <div>
                <span class="join relative z-0 inline-flex shadow-sm">
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
                        <a
                            class="btn join-item"
                            href="{{ $paginator->previousPageUrl() }}"
                            aria-label="{{ __('pagination.previous') }}"
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
                        </a>
                    @endif

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
                                @if ($page == $paginator->currentPage())
                                    <span
                                        class="btn btn-active btn-disabled join-item"
                                        aria-current="page"
                                    >
                                        {{ $page }}
                                    </span>
                                @else
                                    <a
                                        class="btn join-item"
                                        href="{{ $url }}"
                                        aria-label="{{ __('pagination.goto_page', ['page' => $page]) }}"
                                    >
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a
                            class="btn join-item"
                            href="{{ $paginator->nextPageUrl() }}"
                            aria-label="{{ __('pagination.next') }}"
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
                        </a>
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
            </div>
        </div>
    </nav>
@endif
