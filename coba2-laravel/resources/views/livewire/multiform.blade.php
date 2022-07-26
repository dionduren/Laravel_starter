@extends('layouts.main')

@section('container')
    <!-- Masthead-->
    <header class="masthead" style="min-height: 1700px;">
        <div class="row" style="padding-top : 100px; align-items: center; justify-content: center;">

            <div class="col">
                <h1 class="text-white font-weight-bold text-center">Registrasi</h1>
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
                    <div class="col-8 border bg-warning float-end">
                        hello
                    </div>
                </div>
                <div class="col-7 form-registration bg-warning p-3 mx-auto rounded">
                    <form action="/register" method="post">
                        @csrf

                        {{-- wrapper Form Ke-1 --}}
                        @include('livewire.form1Periode')

                        {{-- wrapper Form Ke-2 --}}
                        @include('livewire.form2DataDiri')

                        {{-- wrapper Form Ke-3 --}}
                        @include('livewire.form3Pendidikan')

                        {{-- wrapper Form Ke-4 --}}
                        @include('livewire.form4Pengajuan')

                        {{-- wrapper Tombol Form START --}}
                        <div class="row bg-success">
                            <div class="col">
                                <button class="btn btn-lg btn-primary m-3" type="">Kembali</button>
                            </div>
                            <div class="col">
                                <button class="btn btn-lg btn-primary m-3 float-end" type="">Submit</button>
                                <button class="btn btn-lg btn-primary m-3 float-end" type="">Selanjutnya</button>
                            </div>
                        </div>
                        {{-- wrapper Tombol Form END --}}
                    </form>
                </div>
            </div>
        </div>
    </header>
    @push('selectPeriode')
        <script src="js/periodeFilter.js"></script>
        <script type="text/javascript">
            $('.date').datepicker({
                format: 'mm-dd-yyyy'
            });
        </script>
    @endpush
@endsection
