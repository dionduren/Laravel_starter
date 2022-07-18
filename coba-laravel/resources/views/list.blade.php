{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }} </h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/data">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-warning" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{-- First Card --}}

    @if ($datax->count())
        <div class="card mb-3">
            @if ($datax[0]->image)
                <div style="max-height: 400px; overflow:hidden; ">
                    <img src="{{ asset('storage/' . $datax[0]->image) }}" alt="{{ $datax[0]->title }}"
                        class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x200/?{{ $datax[0]->category->name }}" class="card-img-top"
                    alt="{{ $datax[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title">
                    <a href="/data/{{ $datax[0]->slug }}" class="text-decoration-none text-dark">
                        {{ $datax[0]->title }}
                    </a>
                </h3>
                <p class="card-text">
                    By<a href="/data?author={{ $datax[0]->author->username }}" class="text-decoration-none">
                        {{ $datax[0]->author->name }}
                    </a>
                    in
                    <a href="/data?category={{ $datax[0]->category->slug }}" class="text-decoration-none">
                        {{ $datax[0]->category->name }}
                    </a>
                    <small class="text-muted">Last updated {{ $datax[0]->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $datax[0]->excerpt }}</p>
                <a href="/data/{{ $datax[0]->slug }}" class="text-decoration-note btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                {{-- skip 1 data, start dari 0 --}}
                @foreach ($datax->skip(1) as $file)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.7)">
                                <a href="/data?category={{ $file->category->slug }}"
                                    class="text-decoration-none text-white">
                                    {{ $file->category->name }}
                                </a>
                            </div>
                            @if ($file->image)
                                <img src="{{ asset('storage/' . $file->image) }}" alt="{{ $file->title }}"
                                    class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/300x300/?{{ $file->category->name }}"
                                    class="card-img-top" alt="{{ $file->category->name }}">
                            @endif

                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="/data/{{ $file->slug }}" class="text-decoration-none text-dark">
                                        {{ $file->title }}
                                    </a>
                                </h3>
                                <h6>
                                    By
                                    <a href="/data?author={{ $file->author->username }}" class="text-decoration-none">
                                        {{ $file->author->name }}
                                    </a>
                                    <small class="text-muted">Last updated
                                        {{ $file->created_at->diffForHumans() }}</small>
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
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center ">
        {{ $datax->links() }}
    </div>
@endsection
