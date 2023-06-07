<!-- Topbar Start -->
<div class="container-fluid bg-success text-white d-none d-lg-flex">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="index.html">
                <div class="d-flex justify-content-start align-items-center">
                    <a href="{{ route('home') }}">
                        <img src="{{ url('logoMan.png') }}" width="50" alt="" srcset="">&nbsp;&nbsp;</a>
                    <h2 class="text-white fw-bold m-0">MAN IC BENTENG</h2>
                </div>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Jl. Insan Cendekia Renah Lebar, Bengkulu</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>admin@manicbenteng.sch.id</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>0812-6675-2270</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" target="_blank" href="https://manicbenteng.sch.id/"><i
                        class="fa fa-globe"></i></a>
                    <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" target="_blank" href="https://www.facebook.com/manic.benteng?mibextid=ZbWKwL"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" target="_blank" href="https://instagram.com/man_icbenteng?igshid=NTc4MTIwNjQ2YQ=="><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" target="_blank" href="https://www.youtube.com/@manicbenteng6705"><i
                            class="fab fa-youtube"></i></a>        
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand d-lg-none">
                <h1 class="fw-bold m-0">MAN IC BENTENG</h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link @if(Route::is('home')) active @endif">Home</a>
                    <a href="{{ route('home.alumni') }}" class="nav-item nav-link @if(Route::is('home.alumni')) active @endif">Alumni</a>
                    @if (Auth::user() && Auth::user()->role == 'Alumni')
                    <a href="{{ route('home.profil-alumni') }}" class="nav-item nav-link @if(Route::is('home.profil-alumni')) active @endif">Profil Alumni</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle @if(Route::is('home.prestasi-akademik') || Route::is('home.prestasi-non-akademik') || Route::is('home.perguruan-tinggi') || Route::is('home.pekerjaan') || Route::is('home.hapalan')) active @endif" data-bs-toggle="dropdown">Tracer Alumni</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('home.hapalan') }}" class="dropdown-item">Hapalan Al-Qur'an</a>
                            <a href="{{ route('home.prestasi-akademik') }}" class="dropdown-item">Prestasi Akademik</a>
                            <a href="{{ route('home.prestasi-non-akademik') }}" class="dropdown-item">Prestasi Non Akademik</a>
                            <a href="{{ route('home.perguruan-tinggi') }}" class="dropdown-item">Perguruan Tinggi</a>
                            <a href="{{ route('home.pekerjaan') }}" class="dropdown-item">Pekerjaan</a>
                        </div>
                    </div>
                    @endif
                    @if (Auth::user() && Auth::user()->role == 'Admin')
                        <a href="{{ route('dashboard') }}" class="nav-item nav-link">Dashboard</a>
                    @endif
                </div>
                @if (Auth::user())
                <div class="ms-auto">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="btn btn-success rounded-pill py-2 px-3">
                            Logout
                        </a>
                    </form>
                </div>
                @else
                <div class="ms-auto">
                    <a href="{{ route('login') }}" class="btn btn-success rounded-pill py-2 px-3">Login</a>
                </div>
                @endif
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
