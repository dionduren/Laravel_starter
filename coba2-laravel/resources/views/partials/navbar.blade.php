<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-3">
        <a class="navbar-brand" href="/">
            <img src="img/logopkt.png" alt="logo pkt" width="300" height="75"> Internship
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}"
                        href="/about">Tentang LC</a></li>
                <li class="nav-item"><a class="nav-link {{ Request::is('faq') ? 'active' : '' }}" href="/faq">FAQ</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                                    My
                                    Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-right"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="/register">
                            <i class="bi bi-clipboard-plus"></i> Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="bi bi-box-arrow-in-right"></i> Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModal">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/login">
                    @csrf

                    <div class="form-group row my-2">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autofocus required autocomplete="email"
                                autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row my-2">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4 mx-auto">
                            <button type="submit" class="btn btn-primary float-end">
                                Login
                            </button>
                        </div>
                        <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar
                                Sekarang!</a></small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
