@extends('layouts.main')

@section('title')
    Login
@endsection

@section('content')
    <div class="container col-6">
        <div class="row">
            <div class="card border-3 shadow rounded-3 my-4">
                <h4 class="text-center pt-3">LOGIN</h4>
                <div class="card-body p-2 p-sm-4">
                    <form class="container col-7" action="/login" method="POST">
                        @csrf
                        {{-- <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input name="name" type="email" id="email" class="form-control" />
                            <label class="form-label" for="email">Email address</label>
                        </div> --}}

                        <!-- Email input -->
                        @error('email')
                            <div class="error alert alert-danger mt-1">
                                Isikan Enail
                            </div>
                        @enderror
                        <div class="form-outline mb-4">
                            <input name="email" type="email" id="email" class="form-control"
                                value="{{ old('email') }}" />
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <!-- Password input -->
                        @error('password')
                            <div class="error alert alert-danger mt-1">
                                Isikan Email
                            </div>
                        @enderror
                        <div class="form-outline mb-4">
                            <input name="password" type="password" id="password" class="form-control"
                                value="{{ old('password') }}" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="/register">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
