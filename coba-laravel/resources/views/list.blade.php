{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
    <h1>Filter Post By {{ $title }} </h1>

    {{-- First Card --}}

    @if ($datax->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x200/?{{ $datax[0]->category->name }}" class="card-img-top" alt="{{ $datax[0]->category->name }}">
            <div class="card-body text-center">
            <h3 class="card-title">
                <a href="/data/{{ $datax[0]->slug }}" class="text-decoration-none text-dark">
                    {{ $datax[0]->title }}
                </a>
            </h3>
            <p class="card-text">
                By<a href="/authors/{{ $datax[0]->author->username }}" class="text-decoration-none">
                    {{ $datax[0]->author->name }}
                </a> 
                in 
                <a href="/categories/{{ $datax[0]->category->slug }}" class="text-decoration-none">
                    {{ $datax[0]->category->name }}
                </a> 
                <small class="text-muted">Last updated {{ $datax[0]->created_at->diffForHumans() }}</small>
            </p>
            <p class="card-text">{{ $datax[0]->excerpt }}</p>
            <a href="/data/{{ $datax[0]->slug }}" class="text-decoration-note btn btn-primary">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            {{-- skip 1 data, start dari 0 --}}
            @foreach ($datax->skip(1) as $file)
                <div class="col-md-4">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/categories/{{ $file->category->slug }}" class="text-decoration-none text-white">
                                {{ $file->category->name }}
                            </a>
                        </div>
                        <img src="https://source.unsplash.com/300x300/?{{ $file->category->name }}" class="card-img-top" alt="{{ $file->category->name }}">
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="/data/{{ $file->slug }}" class="text-decoration-none text-dark">
                                    {{ $file->title }}
                                </a>
                            </h3>
                            <h6>
                                By 
                                <a href="/authors/{{ $file->author->username }}" class="text-decoration-none">
                                    {{ $file->author->name }}
                                </a> 
                                {{-- in 
                                <a href="" >
                                    
                                </a>  --}}
                                <small class="text-muted">Last updated {{ $file->created_at->diffForHumans() }}</small>
                            </h6>
                            <p class="card-text">
                                {{ $file->excerpt }}
                            </p>
                            <a href="/data/{{ $file->slug }}" class="text-decoration-note btn btn-primary">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

        

    
@endsection