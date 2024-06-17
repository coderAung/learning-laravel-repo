@extends('templates.main')

@section('content')
<div class="card mb-2">
    <div class="card-body">
        <div class="row">
            <div class="col-auto d-flex align-items-center"
                style="cursor: pointer">
                <a href="{{url('/members')}}">
                    <i class="bi-arrow-counterclockwise fs-5"></i>
                </a>
            </div>
            <form class="row col-5" method="get">
                <div class="col-9">
                <input type="email" name="email" id="" class="form-control h-100"
                placeholder="Enter Email"
                value={{Request::get('email')}}>
            </div>
            <div class="col-auto px-0">
                <button class="btn btn-dark h-100">
                    <i class="bi bi-search"></i>
                    Search
                </button>
            </div>
            </form>
            <div class="col">
                <button type="button" class="btn btn-outline-danger h-100">
                    <i class="bi bi-plus-circle"></i>
                    Add Member
                </button>
            </div>
            <div class="col d-flex justify-content-end">
                {{$members->links('elements.pagination')}}
            </div>
        </div>
    </div>
</div>
<table class="table table-striped table-hover border">
    <thead>
        <tr>
            <th class="text-end">
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
            <th>
                <i class="bi bi-house-door"></i>
                Address</th>
            <td colspan="2">
                {{$members->links('elements.pagination2')}}
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
            <tr class="align-middle">
                <td class="text-end">{{$member->id}}</td>
                <td><a href="{{url("/members/$member->id")}}" class="link-primary link-offset-3">{{$member->name}}</a></td>
                <td>{{$member->email}}</td>
                <td>{{$member->phone_no}}</td>
                <td>{{$member->address->township->name}}</td>
                <td><a href="{{url("/members/$member->id/history")}}" class="btn btn-sm btn-success">
                    <i class="bi bi-clock-history"></i>
                    History</a></td>
                <td><a href="#" class="btn btn-sm btn-outline-dark">
                    <i class="bi bi-pencil-square"></i>
                    Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection