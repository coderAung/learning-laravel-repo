<div class="list-group mb-3">
    <div class="list-group-item bg-dark text-white d-flex justify-content-between">
        <span>
            <i class="bi bi-clock-history"></i> History of {{$name}}
        </span>
    </div>
</div>
<table class="table table-hover table-striped border">
    <thead>
        <tr>
            <th>
                <i class="bi bi-book"></i>
                Book</th>
            <th>
                <i class="bi bi-arrow-up-square"></i>
                Borrow Date</th>
            <th>
                <i class="bi bi-arrow-down-square"></i>
                Return Date</th>
            
            <th>
                <i class="bi bi-clipboard-check"></i>
                Checked By</th>
            <td></td>
        </tr>
    </thead>
    <tbody>

        @foreach ($history as $h)
            <tr class="align-middle">
                <td>{{$h->book->name}}</td>
                
                <td>{{date('d/m/y', strtotime($h->borrow_date))}}</td>
                <td>{{date('d/m/y', strtotime($h->return_date))}}</td>
                <td>{{$h->user->name}}</td>

                <td class="text-center">
                    <a class="btn btn-sm btn-dark view-detail-btn"
                    data-bs-toggle="modal"
                    {{-- data-bs-target="#history-detail" --}}
                    memberId="{{$h->member_id}}"
                    member="{{$h->member->name}}"
                    book="{{$h->book->name}}"
                    author="{{$h->book->author->name}}"
                    checkBy="{{$h->user->name}}"
                    borrowDate="{{date('d/m/y', strtotime($h->borrow_date))}}"
                    returnDate="{{date('d/m/y', strtotime($h->return_date))}}"
                    >
                    <i class="bi bi-arrows-angle-expand"></i>
                    View Detail
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('elements.modals.history-detail')
@section('jsPart')
<script src="{{asset('/js/history_detail.js')}}"></script>
@endsection