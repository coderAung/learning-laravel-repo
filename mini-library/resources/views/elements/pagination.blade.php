@if ($paginator->hasPages())

<ul class="list-group list-group-horizontal">
    @foreach ($elements as $element)
        @if ($paginator->onFirstPage())
            <span class="list-group-item list-group-link">pre</span>
        @else
            <a href="{{url($paginator->previousPageUrl())}}" class="list-group-item list-group-link">pre</a> 
        @endif
        @foreach ($element as $page => $url)
            @if ($page === $paginator->currentPage())
                <a href="{{url($url)}}" class="list-group-item list-group-link bg-dark text-white">{{$page}}</a>
            @else
                <a href="{{url($url)}}" class="list-group-item list-group-link">{{$page}}</a>
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <a href="{{url($paginator->nextPageUrl())}}" class="list-group-item list-group-link">next</a>            
        @else
            <span class="list-group-item list-group-link">next</span>
        @endif
        
    @endforeach
</ul>

@endif
