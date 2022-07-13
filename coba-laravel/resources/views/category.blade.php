{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
    <h1>Data Category: {{ $category }}</h1>

    @foreach ($datax as $file)
        <article class="mb-10">
            {{-- mengganti link menjadi slug  --}}
            <h2><a href="/user/{{ $file->slug }}"> {{ $file->title }}</a></h2>
            <h5> {{ $file->excerpt }}</h5>
        </article>
        <br>
    @endforeach
    <a href="/user"> Back to User</a> <br>
    <a href="/categories"> Back to Category</a>
@endsection