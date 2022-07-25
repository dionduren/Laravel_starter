@extends('layouts.main')

@section('container')
    <!-- Masthead-->
    <header class="masthead" style="min-height: 1000px;">
        <div class="row bg-light" style="padding-top : 100px; align-items: center; justify-content: center;">
            <div class="col">
                <h1 class="text-white font-weight-bold text-center bg-dark">Registrasi</h1>
                <hr class="divider" />
            </div>
            <div class="row py-5 borderr" style="align-items: center; justify-content: center;">
                <div class="col-2">
                    <button class="float-end">Kerja Praktik</button>
                </div>
                <div class="col-3">
                    <button>Pengambilan Data Penelitian</button>
                </div>

            </div>
            <div class="row">
                <div class="col-3 bg-success p-2 mx-auto border">
                    <div class="col-8 border float-end">
                        hello
                    </div>
                </div>
                <div class="col-7 form-registration bg-warning p-3 mx-auto rounded">
                    <form action="/register" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun Magang : </label>
                            <select name="year">
                                @for ($year = date('Y'); $year <= date('Y') + 2; $year++)
                                    <option value="{{ old('year') }}">
                                        {{ $year }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Periode Magang : </label>
                            <select name="periode" id="periode">
                                <option value="3">3 Bulan</option>
                                <option value="6">6 Bulan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Pilihan Bulan : </label>
                            <select name="bulan" id="bulan">
                                <option value=''>Pilih Bulan Periode Magang</option>
                                <option value='3a'>Januari - Maret</option>
                                <option value='3b'>April - Juni</option>
                                <option value='3c'>Juli - September</option>
                                <option value='3d'>Oktober - Desember</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire:model.lazy="name" placeholder="Name" name="name" id="name" required
                                value="{{ old('name') }}">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label for="floatingInput">Email address</label>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <label for="password">Password</label>
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
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
                                <button class="btn btn-lg btn-primary m-3 float-end" type="">Next</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    @push('selectPeriode')
        <script src="js/periodeFilter.js"></script>
    @endpush
@endsection
