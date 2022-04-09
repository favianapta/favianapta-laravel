@extends('layouts.main')
<link rel="stylesheet" href="css/profile.css">

@section('title')
    About
@endsection

@section('content')
<div>
    <div class="text-center arial-bold">
        <h1>MY PROFILE</h1>
    </div>
</div>

<div class="container p-2">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="img/favian.jpg" alt="" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ $nama }}</h4>
                                <p class="text-secondary mb-1">{{ $prodi }}</p>
                                <p class="text-muted font-size-sm">{{ $poltek }}</p>
                                <p class="text-muted font-size-sm">{{ $nim }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <!--<ul class="list-group list-group-flush">-->

                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th scope="row" colspan="2"><i class="bi bi-facebook"></i>Facebook</th>
                                    <td colspan="2">Favian Apta</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2"><i class="bi bi-whatsapp"></i>Whatsapp</th>
                                    <td colspan="2">-</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2"><i class="bi bi-instagram"></i>Instagram</th>
                                    <td colspan="2">@favian_apta_</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="2"><i class="bi bi-envelope"></i>Email</th>
                                    <td colspan="2">favianapta@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="bi bi-github"></i>Github</th>
                                    <td colspan="2">Favian02</td>
                                </tr>
                                <tr>
                                    <th scope="row"><i class="bi bi-linkedin"></i></i>Linkedin</th>
                                    <td colspan="2">-</td>
                                </tr>
                            </tbody>
                        </table>

                    <!--</ul>-->
                </div>
            </div>

            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <table class="table table-hover">
                            <tbody> <!--class="col-sm-9"-->
                                <tr>
                                    <th scope="row">Full Name</th>
                                    <td colspan="2">{{ $nama }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nickname</th>
                                    <td colspan="2">Favian</td>
                                </tr>
                                <tr>
                                    <th scope="row">Place Of Birth</th>
                                    <td colspan="2">Kota Malang</td>
                                </tr>
                                <tr>
                                    <th scope="row">Date Of Birth</th>
                                    <td colspan="2">26 Februari 2002</td>
                                </tr>
                                <tr>
                                    <th scope="row">State of Residence</th>
                                    <td colspan="2">Jawa Timur</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td colspan="2">Jln. Grindulu Gg Mushola No.2 Rt.06 Rw.07 Malang</td>
                                </tr>
                                <tr>
                                    <th scope="row">Religion</th>
                                    <td colspan="2">Islam</td>
                                </tr>
                                <tr>
                                    <th scope="row">Height</th>
                                    <td colspan="2">177</td>
                                </tr>
                                <tr>
                                    <th scope="row">Blood Group</th>
                                    <td colspan="2">O</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ELEMEN WAVE -->
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