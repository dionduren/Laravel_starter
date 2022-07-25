@extends('layouts.main')

@section('container')
    <!-- Masthead-->
    <header class="masthead" style="min-height: 1000px;">
        <div class="container" style="padding-top : 100px;">
            <div>
                <h1 class="text-white font-weight-bold text-center">Registrasi</h1>
                <hr class="divider" />
            </div>
            <div>
                <main class="form-registration bg-warning">
                    <form action="/register" method="post">
                        @csrf
                        <!-- Progress bar -->
                        <div class="progressbar bg-primary">
                            <div class="progress" id="progress"></div>

                            <div class="progress-step progress-step-active" data-title="Intro"></div>
                            <div class="progress-step" data-title="Contact"></div>
                            <div class="progress-step" data-title="ID"></div>
                            <div class="progress-step" data-title="Password"></div>
                        </div>

                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                placeholder="Username" required value="{{ old('username') }}">
                            <label for="name">Username</label>
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-lg btn-primary m-3" type="">Previous</button>
                            </div>
                            <div class="col ">
                                <button class="btn btn-lg btn-primary m-3 " type="">Register</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-lg btn- m-3 float-end" type="">Next</button>
                            </div>
                        </div>
                    </form>
                </main>
            </div>
        </div>
        </div>
    </header>
@endsection
