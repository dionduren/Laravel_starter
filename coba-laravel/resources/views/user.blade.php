{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
    <h1>Halaman Daftar Data</h1>

    @foreach ($data as $file)
        <article class="mb-5 border-bottom pb-4">
            {{-- mengganti link menjadi slug  --}}
            <h2><a href="/user/{{ $file->slug }}" class="text-decoration-none"> {{ $file->title }}</a></h2>

            <h6>By <a href="#" class="text-decoration-none">{{ $file->user->name }}</a> in <a href="/categories/{{ $file->category->slug }}" class="text-decoration-none">{{ $file->category->name }}</a> </h6>

            <p> {{ $file->excerpt }}</p>

            <a href="/user/{{ $file->slug }}" class="text-decoration-none"> Read more..</a>
        </article>
    @endforeach
@endsection