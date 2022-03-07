@extends('layouts.main')
<link rel="stylesheet" href="css/komen.css">

@section('title')
    Komen
@endsection

@section('content')
    <!-- Section: Contact v.3 -->
    <section class="contact-section container my-5">

        <!-- Form with header -->
        <div class="card">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-8">

                    <div class="card-body form">

                        <!-- Header -->
                        <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="form-contact-name" class="">Your name</label>
                                    <input type="text" id="form-contact-name" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="form-contact-email" class="">Your email</label>
                                    <input type="text" id="form-contact-email" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="form-contact-phone" class="">Your phone</label>
                                    <input type="text" id="form-contact-phone" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="form-contact-company" class="">Your company</label>
                                    <input type="text" id="form-contact-company" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="form-contact-message">Your message</label>
                                    <textarea id="form-contact-message" class="form-control md-textarea"
                                        rows="3"></textarea>
                                    <a type="button" href="#" class="btn-floating btn-lg blue">
                                        <i class="far fa-paper-plane"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4">

                    <div class="card-body contact text-center h-100 white-text">

                        <h3 class="my-4 pb-2">Contact information</h3>
                        <ul class="text-lg-left list-unstyled ml-4">
                            <li>
                                <p><i class="fas fa-map-marker-alt pr-2"></i>Indonesia, Malang</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone pr-2"></i>{{ $notelp }}</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope pr-2"></i>{{ $email }}</p>
                            </li>
                        </ul>
                        <hr class="hr-light my-4">
                        <ul class="list-inline text-center list-unstyled">
                            <li type="button" class="btn">
                                <a class="p-2 fa-lg li-ic"
                                    href="https://www.linkedin.com/in/m-favian-apta-syahputra-0386231b7">
                                    <i class="fab fa-linkedin-in"> </i>
                                </a>
                            </li>
                            <li type="button" class="btn">
                                <a class="p-2 fa-lg ins-ic" href="https://www.instagram.com/favian_apta_/">
                                    <i class="fab fa-instagram"> </i>
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Form with header -->

    </section>
    <!-- ELEMEN WAVE -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#212529" fill-opacity="1"
            d="M0,128L48,144C96,160,192,192,288,170.7C384,149,480,75,576,80C672,85,768,171,864,186.7C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <!-- Section: Contact v.3 -->
    <!-- FOOTER -->
    <footer class="bg-dark text-white text-center pb-1">
        <p class="text-white arial-bold">Copyright &copy; 2022 by Favian</p>
    </footer>
@endsection
