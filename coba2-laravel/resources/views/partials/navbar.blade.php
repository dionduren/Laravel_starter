<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-3">
        <a class="navbar-brand" href="/">
            <img src="img/logopkt.png" alt="logo pkt" width="250" height="50"> Internship
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
                <li class="nav-item"><a class="nav-link" href="/register">
                        <i class="bi bi-clipboard-plus"></i> Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
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
                        <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control @error('username') is-invalid @enderror"
                                name="username" value="{{ old('username') }}" autofocus required autocomplete="username"
                                autofocus>

                            @error('username')
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

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    Ingat saya
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <button type="submit" class="btn btn-secondary">
                                Lupa Password?
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
