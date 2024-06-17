@extends('templates.main')
@section('content')
<div class="card mb-3">
    <div class="card-body row">
        <div class="col-auto">
            <a href="{{url()->previous()}}" class="fs-5"><i class="bi bi-arrow-bar-left"></i></a>
        </div>
        <div class="col-2">
            <img src="https://publish.purewow.net/wp-content/uploads/sites/2/2024/04/Anya-Taylor-Joy-2024-Oscars-CAT2.jpg?resize=720%2C550"
                alt=""
                class="img-fluid rounded">
        </div>
        <div class="col">
            <div class="row">
                <div class="col-auto ps-0">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-person-circle"></i>
                        </span>
                        <input type="text" class="form-control" value="{{$author->name}}" disabled>    
                        <span class="input-group-text">
                            <a href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-send-fill"></i>
                        </span>
                        <input type="text" class="form-control" value="{{$author->email}}" disabled>    
                        <span class="input-group-text">
                            <a href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </span>
                    </div>
                </div>

                <div class="col-auto">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <input type="text" class="form-control" value="{{$author->phone_no}}" disabled>    
                        <span class="input-group-text">
                            <a href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </span>
                    </div>
                </div>
            
            </div>

            <div class="row mt-3">
                <a href="#" class="col-auto btn btn-sm btn-dark text-center me-2 text-capitalize">
                    <i class="bi bi-pencil-square"></i>
                    edit profile</a>
                <a href="#" class="col-auto btn btn-sm btn-outline-danger text-center me-2 text-capitalize">
                    <i class="bi bi-trash3-fill"></i>
                    delete author</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-striped border">
    <thead>
        <tr>
            <th>
                <i class="bi bi-book"></i>
                Book</th>
            <th>
                <i class="bi bi-pencil"></i>
                Edition</th>
            <th>
                <i class="bi bi-film"></i>
                Genre</th>
            <th>
                <i class="bi bi-buildings"></i>
                Publisher</th>
            <th class="text-end">
                <i class="bi bi-collection"></i>
                Instock</th>
            
            <th colspan="2">Manage Total Books</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($author->books as $book)
    <tr class="align-middle">
        <td>
            {{$book->name}}</td>
        <td>{{$book->edition}}</td>
        <td>{{$book->genre->name}}</td>
        <td>{{$book->publisher->name}}</td>
        <td class="text-end">{{$book->bookDetail->total_books}}</td>
        
        
        <td colspan="2" class="text-center">
            <a href="#" class="text-decoration-none text-danger me-3 fs-5">
                <i class="bi bi-dash-circle"></i>
            </a>
            <a href="#" class="text-decoration-none text-danger fs-5">
                <i class="bi bi-plus-circle"></i>
            </a>
        </td>

        <td class="text-center"><a href="{{url("/book/$book->id")}}" class="btn btn-sm btn-dark">
            <i class="bi bi-arrows-angle-expand"></i>
            View Detail</a></td>
    </tr>
    @endforeach
        
    </tbody>
</table>
@endsection