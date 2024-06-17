@extends('templates.main')
@php
    use Carbon\Carbon;
@endphp
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

            <form class="col-7 row" action="{{url('/books')}}" method="get">
                <div class="col-6">
                    <input type="text" name="keyword" id="" class="form-control h-100"
                    placeholder="Enter Keyword">

                </div>
                <div class="col-4 ps-0">
                    <select name="type" id="" class="form-select h-100">
                        
                        <option value="book" selected>Book Name</option>
                        <option value="author">Author Name</option>
                        <option value="publisher">Publisher</option>
                        <option value="genre">Genre</option>
    
                    </select>
                </div>
                <div class="col ps-0">
                    <button class="btn btn-dark h-100">Search</button>
                </div>
                
            </form>
            <div class="col px-0">
                <button type="button" class="btn btn-outline-danger h-100">Add Book</button>
            </div>
            <div class="col d-flex justify-content-end">
                {{$books->links('elements.pagination')}}
            </div>  
        </div>
        
    </div>
</div>

<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th class="text-end"><i class="bi bi-key"></i>
                ID</th>
            <th><i class="bi bi-book"></i>
                Book</th>
            <th><i class="bi bi-pencil"></i>
                Author</th>
            <th><i class="bi bi-film"></i>
                Genre</th>
            <th><i class="bi bi-buildings"></i>
                Publisher</th>
            <th><i class="bi bi-collection"></i>
                Total</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php
            $date = Carbon::now();
            $borrowDate = $date->format('d/m/y');
            $returnDate = $date->addDays(7)->format('d/m/y');
        @endphp
        @foreach ($books as $book)
            <tr class="align-middle">
                <td class="text-end">{{$book->id}}</td>
                <td><a href="#" class="link-primary link-offset-3">{{$book->name}}</a></td>
                <td>
                    <a href="{{url("/authors/$book->author_id")}}">
                        {{$book->author->name}}
                    </a>
                </td>
                <td>{{$book->genre->name}}</td>
                <td>{{$book->publisher->name}}</td>
                <td class="text-center">{{$book->bookDetail->total_books}}</td>
                <td>
                    <a class="btn btn-sm btn-outline-success borrow-btn"
                    book="{{$book->name}}"
                    author="{{$book->author->name}}"
                    borrowDate="{{$borrowDate}}"
                    returnDate="{{$returnDate}}">
                        Borrow
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('elements.forms.modals.borrow-form')

@if (session('msg'))
    <div class="modal" id="msg">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row justify-content-between align-items-center">
                            <span class="col-auto fs-5">
                                {{session('msg')}}            
                            </span>
                            <div class="col-auto pe-0">
                                <span class="fs-4"><i class="bi-x" data-bs-dismiss="modal" style="cursor: pointer"></i></span>
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-end">
                            <button class="btn btn-primary col-2" data-bs-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
    </div>
@endif
@endsection

@section('jsPart')
    <script src="{{asset('/js/borrow_form.js')}}"></script>
    @if (session('msg'))
        <script>
            const msg = new bootstrap.Modal('#msg');
            msg.show();
        </script>
    @endif
@endsection