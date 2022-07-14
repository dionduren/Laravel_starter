{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
    <h1>Pengelompokan Post Berdasarkan {{ ($title === "datalist") ? 'Penulis' : (($title === "category") ? 'Kategori' : '')}}: {{ $category }}</h1>

    @foreach ($datax as $file)
        <article class="mb-10">
            {{-- mengganti link menjadi slug  --}}
            <h2><a href="/data/{{ $file->slug }}" class="text-decoration-none"> {{ $file->title }}</a></h2>
            <h5> {{ $file->excerpt }}</h5>
        </article>
        <br>
    @endforeach
    <a href="/data"> Back to Data List</a> <br>
    <a href="/categories"> Back to Category</a>
@endsection