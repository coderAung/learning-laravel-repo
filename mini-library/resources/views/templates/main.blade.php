<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini-Library</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script></head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <body>
    <nav class="navbar navbar-expand navbar-dark bg-dark shadow mb-4 sticky-top">
        <div class="container-fluid">
            <a href="#" class="navbar-brand fs-4">
                <i class="bi bi-house-check"></i>
                Library Management System
            </a>
            <div class="collapse navbar-collapse d-flex justify-content-end">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sign out</a></li>
                    @endauth
                    @guest
                    <li class="nav-item"><a href="#" class="nav-link">Sign up</a></li>                        
                    <li class="nav-item"><a href="#" class="nav-link">Sign in</a></li>                        
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="mb-3">
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white">
                            <i class="bi bi-bar-chart-fill"></i>
                            General
                        </li>
                        <a href="{{url('/borrowing-history')}}" class="list-group-item list-group-link">
                            <i class="bi bi-arrow-down-up"></i>
                            Borrowing History
                            @if (url()->current() == url('/borrowing-history'))
                            <span>
                                <i class="bi bi-caret-left-fill"></i>
                            </span>  
                            @endif
                            
                        </a>
                        <a href="{{url('/members')}}" class="list-group-item list-group-link">
                            <i class="bi bi-people-fill"></i>
                            Members
                            @if (url()->current() == url('/members'))
                            <span>
                                <i class="bi bi-caret-left-fill"></i>
                            </span>  
                            @endif
                        </a>
                        <a href="{{url('/unreturned-books')}}" class="list-group-item list-group-link">
                            <i class="bi bi-calendar-date"></i>
                            Unreturned Books
                            @if (url()->current() == url('/unreturned-books'))
                            <span>
                                <i class="bi bi-caret-left-fill"></i>
                            </span>  
                            @endif
                        </a>
                    </ul>
                </div>
                <div class="mb-3">
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white">
                            <i class="bi bi-bookmark-check"></i>
                            Book Management
                        </li>
                        <a href="{{url('/books')}}" class="list-group-item list-group-link">
                            <i class="bi bi-book"></i>
                            Books
                            @if (url()->current() == url('/books'))
                            <span>
                                <i class="bi bi-caret-left-fill"></i>
                            </span>  
                            @endif
                        </a>
                        <a href="{{url("/authors")}}" class="list-group-item list-group-link">
                            <i class="bi bi-pencil"></i>
                            Authors
                            @if (url()->current() == url('/authors'))
                            <span>
                                <i class="bi bi-caret-left-fill"></i>
                            </span>  
                            @endif
                        </a>
                        <a href="#" class="list-group-item list-group-link">
                            <i class="bi bi-plus-square"></i>
                            Add Book</a>
                    </ul>
                </div>
                <div>
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white">User Management</li>
                        <a href="#" class="list-group-item list-group-link">Users</a>
                    </ul>
                </div>
            </div>
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>
</body>
@yield('jsPart')
</html>