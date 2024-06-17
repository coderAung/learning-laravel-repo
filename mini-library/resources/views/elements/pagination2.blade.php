@if ($paginator->hasPages())
<div class="container-fluid">
    <div class="row">
        @if ($paginator->onFirstPage())
            <div class="col px-0 text-dark text-end text-muted">
                <i class="bi bi-arrow-left-circle fs-5"></i>
            </div>
        @else
            <div class="col px-0 text-end">
                <a class="text-dark" href="{{url($paginator->previousPageUrl())}}">
                    <i class="bi bi-arrow-left-circle fs-5"></i>
                </a>
            </div>
        @endif
        <div class="col d-flex align-items-center text-muted justify-content-center">
            {{$paginator->currentPage()}}/{{$paginator->lastPage()}}
        </div>
        @if ($paginator->hasMorePages())
            
            <div class="col px-0 text-start">
                <a class="text-dark" href="{{url($paginator->nextPageUrl())}}">
                    <i class="bi bi-arrow-right-circle fs-5"></i>
                </a>
            </div>                    
        @else
            <div class="col px-0 text-dark text-start text-muted">
                <i class="bi bi-arrow-right-circle fs-5"></i>
            </div>
        @endif
    </div> 
</div>
@endif