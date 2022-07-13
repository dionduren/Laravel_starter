{{-- @dd($categoryx) --}}

@extends('layouts.main')

@section('container')
    <h1>Halaman List Category</h1>

    @foreach ($categoryx as $file)
        <article class="mb-10">
            {{-- mengganti link menjadi slug  --}}
            <h2><a href="/categories/{{ $file->slug }}"> {{ $file->name }}</a></h2>
            {{-- <h5> {{ $file->excerpt }}</h5> --}}
        </article>
        <br>
    @endforeach
@endsection