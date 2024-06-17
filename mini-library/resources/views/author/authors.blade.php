@extends('templates.main')

@section('content')
<div class="card mb-2">
    <div class="card-body">
        
            <div class="row">
                <form class="row col-6" action="#" method="get">
                    <div class="col-9">
                    <input type="email" name="email" id="" class="form-control h-100"
                    placeholder="Enter Email">
                </div>
                <div class="col ps-0">
                    <button class="btn btn-dark h-100">
                        <i class="bi bi-search"></i>
                        Search</button>
                </div>
                </form>
                <div class="col d-flex justify-content-end">
                    {{$authors->links('elements.pagination')}}
                </div>
            </div>

    </div>
</div>

<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th class="text-end col-1">
                <i class="bi bi-key"></i>
                ID</th>
            <th>
                <i class="bi bi-person"></i>
                Name</th>
            <th>
                <i class="bi bi-envelope-check"></i>
                Email</th>
            <th>
                <i class="bi bi-telephone"></i>
                Phone</th>
            
            <th colspan="2">
                {{$authors->links('elements.pagination2')}}
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($authors as $author)
            <tr class="align-middle">
                <td class="text-end col-1">{{$author->id}}</td>
                <td><a href="{{url("/authors/$author->id")}}" class="link-primary link-offset-3">{{$author->name}}</a></td>
                <td>{{$author->email}}</td>
                <td>{{$author->phone_no}}</td>
                <td><a href="{{url("/author/$author->id")}}" class="btn btn-sm btn-dark">
                    <i class="bi bi-arrows-angle-expand"></i>
                    View Detail</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection