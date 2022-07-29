{{-- @dd($datax) --}}

@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>

    <main>
        <h1 class="h2">Dashboard Data Peserta</h1>
        <div class="row justify-content-between align-items-center py-3 mb-3 border-bottom">
            <div class="table-responsive col">
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tingkat Pendidikan</th>
                            <th scope="col">Institusi</th>
                            <th scope="col">Fakultas / Jurusan</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Departemen Peminatan</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datax as $filex)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $filex->nama }}</td>
                                <td>{{ $filex->email1 }}</td>
                                <td>{{ $filex->tingkatpendidikan }}</td>
                                <td>{{ $filex->institusi }}</td>
                                @if (empty($filex->jurusan))
                                    <td>{{ $filex->fakultas }}</td>
                                @else
                                    <td> {{ $filex->jurusan }}</td>
                                @endif
                                <td>{{ $filex->tahun }}</td>
                                <td>{{ $filex->peminatan }}</td>
                                @if ($filex->imgFoto)
                                    <td>
                                        <div style="max-width: 160px; overflow:inherit ">
                                            <img src="{{ asset('storage/' . $filex->imgFoto) }}"
                                                alt="Pas Foto {{ $filex->nama }}" class="img-fluid">
                                        </div>
                                    </td>
                                @else
                                    <td>
                                        <img src="https://source.unsplash.com/160x240/?potrait"
                                            alt="Pas Foto {{ $filex->nama }}" class="img-fluid">
                                    </td>
                                @endif
                                <td>
                                    <a href="/dashboard/data/{{ $filex->id }}" class="btn bg-info text-white">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="/dashboard/data/{{ $filex->id }}/edit" class="btn bg-warning text-white">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="/dashboard/data/{{ $filex->id }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class=" btn bg-danger border-0 text-white"
                                            onclick="return confirm('Are you sure?')">
                                            <i class="bi bi-x-circle"></i>
                                        </button>
                                    </form>
                                    <button class=" btn bg-success border-0 text-white"
                                        onclick="return confirm('Are you sure?')">
                                        <i class="bi bi-check-circle"></i> Approval
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div>
        <h1 class="h2">Kuota Kerja Praktik Tahunan</h1>
        <div class="row justify-content-between align-items-center py-3 mb-3 border-bottom">
            <div class="table-responsive col">
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Sisa Kuota</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kuota as $filey)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $filey->tahunperiode }}</td>
                                <td>{{ $filey->kuota }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
@endsection
