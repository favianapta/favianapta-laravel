{{-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active text-light" aria-current="page" href="/">HOME</a>
                <a class="nav-link active text-light" aria-current="page" href="/about">BIODATA</a>
                <a class="nav-link active text-light" aria-current="page" href="/komen">KOMENTAR</a>
            </div>
            <div class="navbar-nav ms-auto">
                <a class="nav-link active text-light" aria-current="page" href="/login">Login</a>
            </div>
        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/komen">Komen</a>
                </li>
            </ul>
            @auth
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <form action="/logout" method="POST" >
                        @csrf
                        <button type="submit" class="btn btn-danger" >Logout</button>
                    </form>
                </li>
            </ul>
            @else
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/login">Login</a>
                </li>
            </ul>
            @endauth
            
        </div>
    </div>
</nav>
