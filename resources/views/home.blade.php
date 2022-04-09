@extends('layouts.main')
<link rel="stylesheet" href="css/home.css">

@section('title')
    Home
@endsection

@section('content')
    <div class="container-fluid banner">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar">
                    <div class="navbar-brand"></div>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-8 offset-md-2 info">
                <h1 class="text-center">{{ $hello }}</h1>
                <p class="text-center">
                    {{ $welcome }}
                </p>
                <a href="/about" class="btn btn-md text-center">SEE PROFILE</a>
            </div>
        </div>
    </div>
    <!-- ELEMEN WAVE -->



    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center pb-1">
        <p class="text-white arial-bold">Copyright &copy; 2022 by Favian</p>
    </footer>
@endsection
