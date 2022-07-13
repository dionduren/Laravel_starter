{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
    <h1>Halaman User</h1>

    @foreach ($data as $file)
        <article class="mb-10">
            {{-- mengganti link menjadi slug  --}}
            <h2><a href="/user/{{ $file->slug }}"> {{ $file->title }}</a></h2>
            <h5> {{ $file->excerpt }}</h5>
        </article>
        <br>
    @endforeach
@endsection