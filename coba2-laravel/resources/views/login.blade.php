@extends('layouts.main')

@section('container')
    <!-- Masthead-->
    <header class="masthead" style="min-height: 1800px;">
        <div class="container" style="padding-top : 100px;">
            <div>
                <h1 class="text-white font-weight-bold text-center">LOGIN</h1>
                <hr class="divider" />
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form method="post" action="/login">
                                @csrf

                                <div class="form-group row my-2">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" autofocus required
                                            autocomplete="email" autofocus>

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
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

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
        </div>
    </header>
@endsection
