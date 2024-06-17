@if ($paginator->hasPages())
    <div class="row w-75">
        @if ($paginator->onFirstPage())
            <div class="col page-link text-dark">
                prev
            </div>
        @else
            <a href="{{url($paginator->previousPageUrl())}}" class="col page-link text-dark">
                prev
            </a>        
        @endif
        <div class="col-2"></div>
        @if ($paginator->hasMorePages())
            <a href="{{url($paginator->nextPageUrl())}}" class="col page-link text-dark">
                next
            </a>                    
        @else
            <div class="col page-link text-dark">
                next
            </div>
        @endif
    </div> 
@endif