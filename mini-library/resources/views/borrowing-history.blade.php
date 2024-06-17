@extends('templates.main')
@section('content')
<div class="card mb-2">
    <div class="card-body">
        <div class="row">
            <div class="col-auto d-flex align-items-center"
                style="cursor: pointer">
                <a href="{{url($resetUrl)}}">
                    <i class="bi-arrow-counterclockwise fs-5"></i>
                </a>
            </div>
            <form class="col-8 row" method="get">
                
                <div class="col-6">
                    @php
                        $keyword = "";
                        $type = "";
                        if (Request::get('keyword') !== null) {
                           $keyword = Request::get('keyword');
                           $type = Request::get('type');
                        }
                    @endphp
                    <input type="text" name="keyword" id="" class="form-control h-100"
                    placeholder="Enter Keyword"
                    value="{{$keyword}}">
                </div>
                <div class="col-4 ps-0">
                    <select name="type" id="" class="form-select h-100">
                        <option value="member"
                        @if ($type === "member")
                            {!!"selected"!!}
                        @endif
                        >Member Name</option>
                        <option value="book"
                        @if ($type === "book")
                            {!!"selected"!!}
                        @endif
                        >Book Name</option>
                        <option value="author"
                        @if ($type === "author")
                            {!!"selected"!!}
                        @endif
                        >Author Name</option>
                        <option value="genre"
                        @if ($type === "genre")
                            {!!"selected"!!}
                        @endif>Genre</option>
                    </select>
                </div>
                <div class="col px-0">
                    <button class="btn btn-dark h-100">
                        <i class="bi bi-search"></i>
                        <span>Search</span>
                    </button>
                </div>
                
            </form>
            <div class="col px-0">
                <button type="button" class="btn btn-outline-danger h-100">
                    <i class="bi bi-plus-circle"></i>
                    Create History
                </button>
            </div>
        </div>
        
    </div>
</div>
<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th>
                <i class="bi bi-person-circle"></i>
                Member</th>
            <th>
                <i class="bi bi-book"></i>
                Book</th>
            <th>
                <i class="bi bi-arrow-up-square"></i>
                Borrowed Date</th>
            <th>
                <i class="bi bi-arrow-down-square"></i>
                Return Date</th>
            <td>
                {{$history->links('elements.pagination2')}}
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($history as $h)
        <tr class="align-middle">
            <td>
                <a href="{{url("/members/$h->member_id")}}">
                    {{$h->member->name}}
                </a>
            </td>
            <td>{{$h->book->name}}</td>
            <td class="text-center">{{date('d/m/y', strtotime($h->borrow_date))}}</td>
            <td class="text-center text-danger">{{date('d/m/y', strtotime($h->return_date))}}</td>
            <td class="text-center">
                <a class="btn btn-sm btn-dark view-detail-btn"
                data-bs-toggle="modal"
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
@endsection

@section('jsPart')
<script src="{{asset('/js/history_detail.js')}}"></script>
@endsection