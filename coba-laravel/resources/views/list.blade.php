{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
    <h1>Filter Post By {{ $title }} </h1>

    @foreach ($datax as $file)
        <article class="mb-5 border-bottom pb-4">
            <h2>
                <a href="/data/{{ $file->slug }}" class="text-decoration-none"> 
                    {{ $file->title }}
                </a>
            </h2>

            <h6>
                By 
                <a href="/authors/{{ $file->author->username }}" class="text-decoration-none">
                    {{ $file->author->name }}
                </a> 
                in 
                <a href="/categories/{{ $file->category->slug }}" class="text-decoration-none">
                    {{ $file->category->name }}
                </a> 
            </h6>

            <p>{{ $file->excerpt }}</p>
            
            <a href="/data/{{ $file->slug }}" class="text-decoration-none">
                Read more..
            </a>
        </article>
    @endforeach
@endsection