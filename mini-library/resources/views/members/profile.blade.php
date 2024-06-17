@extends('templates.main')
@section('content')

@php
    $str = "Hey";
@endphp
{{-- profile section --}}
@if (isset($member))
@php
    $name = $member->name;
    $history = $member->history;
@endphp
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
                        <input type="text" class="form-control" value="{{$member->name}}" disabled>    
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
                        <input type="text" class="form-control" value="{{$member->email}}" disabled>    
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
                        <input type="text" class="form-control" value="{{$member->phone_no}}" disabled>    
                        <span class="input-group-text">
                            <a href="#">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </span>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-geo-alt-fill"></i>
                        </span>
                        <input type="text" class="form-control"
                        value="{{Str::limit(
                            $member->address->name.', '.$member->address->township->name.', '.$member->address->township->state->name
                        )}}" disabled>    
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
                    delete user</a>
            </div>


        </div>
        
    </div>
</div>
@else
<div class="row mb-3">
    <a class="col-auto fs-5" href="{{url()->previous()}}">
        <i class="bi-arrow-bar-left"></i>
    </a></div>
@endif

    {{-- history section --}}

    @include('elements.history')
    
@endsection