@extends('layouts.main')

@section('title')
    Register
@endsection

@section('content')
    {{-- <section class="vh-100" style="background-color: #eee;"> --}}
    <div class="container h-100 pt-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>

                                <form class="mx-1 mx-md-4" action="/register" method="POST">
                                    @csrf

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example1c">Your Name</label>
                                            <input name="name" type="text" id="form3Example1c" class="form-control" value="{{ old("name") }}" />
                                            @error('name')
                                                <div class="error alert alert-danger mt-1">
                                                    Isikan Nama
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example3c">Your Email</label>
                                            <input name="email" type="email" id="form3Example3c" class="form-control" value="{{ old("email") }}" />
                                            @error('email')
                                                <div class="error alert alert-danger mt-1">
                                                    Isikan Email
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <label class="form-label" for="form3Example4c">Password</label>
                                            <input name="password" type="password" id="form3Example4c"
                                                class="form-control" value="{{ old("password") }}" />
                                            @error('password')
                                                <div class="error alert alert-danger mt-1">
                                                    Isikan Password
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    {{-- <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat your
                                                    password</label>
                                            </div>
                                        </div> --}}

                                    {{-- <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div> --}}

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </div>

                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                    class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </section> --}}

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#212529" fill-opacity="1"
            d="M0,128L48,144C96,160,192,192,288,170.7C384,149,480,75,576,80C672,85,768,171,864,186.7C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center pb-1">
        <p class="text-white arial-bold">Copyright &copy; 2022 by Favian</p>
    </footer>
@endsection
