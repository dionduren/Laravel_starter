@extends('layouts.main')

@section('container')
    <!-- Masthead-->
    <header class="masthead">
        <div class="row" style="padding-top : 75px; align-items: center; justify-content: center;">

            <div class="col">
                <h1 class="text-white font-weight-bold text-center">Registrasi</h1>
                <hr class="divider" />
            </div>

            <div class="row" style="align-items: center; justify-content: center;">
                <div class="col-3">
                    <button class="btn btn-lg btn-primary m-3 float-end">Kerja Praktik</button>
                </div>
                <div class="col-3">
                    <button class="btn btn-lg btn-primary m-3">Pengambilan Data Penelitian</button>
                </div>
            </div>

            <div class="row">
                {{-- navbar register kiri --}}
                @include('partials.sidebarRegister')
                {{-- navbar register kiri --}}

                {{-- Space di Tengah --}}
                <div class="col-1" style="width: 2.5%"></div>
                {{-- Space di Tengah --}}

                {{-- Form Registrasi --}}
                <div class="col-7 form-registration p-3 rounded text-white"
                    style="margin-right:auto; background: rgba(244, 98, 58, 0.4)">
                    <form action="/register" method="post" enctype="multipart/form-data">
                        @csrf

                        {{-- wrapper Form Ke-1 --}}
                        @include('register.form1Periode')

                        {{-- wrapper Form Ke-2 --}}
                        @include('register.form2DataDiri')

                        {{-- wrapper Form Ke-3 --}}
                        @include('register.form3Pendidikan')

                        {{-- wrapper Form Ke-4 --}}
                        @include('register.form4Pengajuan')

                        {{-- wrapper Form Ke-5 --}}
                        @include('register.form5Lampiran')

                        {{-- wrapper Tombol Form START --}}
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-lg btn-primary m-3" type="button" id="prev"
                                    style="display: none">
                                    Kembali
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-lg btn-secondary m-3 float-end" type="submit" id="submit"
                                    style="display: none">
                                    Submit
                                </button>
                                <button class="btn btn-lg btn-primary m-3 float-end" type="button" id="next">
                                    Selanjutnya
                                </button>
                            </div>
                        </div>
                        {{-- wrapper Tombol Form END --}}
                    </form>
                </div>
            </div>
        </div>
    </header>
    @push('scriptRegistration')
        <script>
            var jsonPeriode = {!! json_encode($kuota) !!};
            
        </script>
        <script src="js/periodeFilter.js"></script>
        <script src="js/multipage.js"></script>
    @endpush
@endsection
