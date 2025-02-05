@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex flex-col items-center space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 md:px-4 md:py-2 text-gray-400 bg-gray-200 rounded-md cursor-not-allowed">Prev</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-3 py-1 md:px-4 md:py-2 text-[#415464] hover:text-[#A4CA62] shadow-[1px_1px_2px_0px_rgba(0,0,0,0.75)] rounded-md hover:!shadow-none transition-shadow duration-500">Prev</a>
        @endif

        {{-- Pagination Elements --}}
        <div class="flex space-x-1 sm:space-x-2">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <span class="px-3 py-1 md:px-4 md:py-2 text-gray-500">...</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-3 py-1 md:px-4 md:py-2 text-white bg-[#A4CA62] rounded-md">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="px-3 py-1 md:px-4 md:py-2 text-[#415464] bg-white  rounded-md hover:text-[#A4CA62] hover:!bg-[#415464] transition">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-3 py-1 md:px-4 md:py-2 text-[#415464] hover:text-[#A4CA62] shadow-[1px_1px_2px_0px_rgba(0,0,0,0.75)] rounded-md hover:!shadow-none transition-shadow duration-500">Next</a>
        @else
            <span class="px-3 py-1 md:px-4 md:py-2 text-gray-400 bg-gray-200 rounded-md cursor-not-allowed">Next</span>
        @endif
    </nav>
@endif
