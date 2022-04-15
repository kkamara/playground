@if ($paginator->hasPages())

<ul class="flex justify-between">
    @if ($paginator->onFirstPage())
        <li>
            <button class="w-16 px-2 py-1 text-center rounded border bg-gray-200">Prev</button>
        </li>
    @else
        <li>
            <button 
                wire:click="previousPage"
                class="w-16 px-2 py-1 text-center rounded border shadow bg-white"
            >
                Prev
            </button>
        </li>
    @endif

    @foreach($elements[0] as $page => $url)
        @if($page == $paginator->currentPage())
            <li class="mx-2">
                <button 
                    wire:click="gotoPage({{$page}})"
                    class="w-16 px-2 py-1 text-center rounded border shadow bg-blue-500 text-white"
                >
                    {{$page}}
                </button>
            </li>
        @else
            <li class="mx-2">
                <button 
                    wire:click="gotoPage({{$page}})"
                    class="w-16 px-2 py-1 text-center rounded border shadow bg-white"
                >
                    {{$page}}
                </button>
            </li>
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li wire:click="nextPage">
            <button class="w-16 px-2 py-1 text-center rounded border shadow bg-white">Next</button>
        </li>
    @else
        <li>
            <button class="w-16 px-2 py-1 text-center rounded border bg-gray-200">Next</button>
        </li>
    @endif
</ul>

@endif
