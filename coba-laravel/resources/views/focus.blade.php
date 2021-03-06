{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3"> {{ $datax->title }}</h1>
                @if ($datax->image)
                    <img src="{{ asset('storage/' . $datax->image) }}" alt="{{ $datax->title }}" class="img-fluid">
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $datax->category->name }}" class="card-img-top"
                        alt="{{ $datax->category->name }}">
                @endif
                <h5>
                    By
                    <a href="/data?author={{ $datax->author->username }}" class="text-decoration-none">
                        {{ $datax->author->name }}
                    </a>
                    in
                    <a href="/data?category={{ $datax->category->slug }}" class="text-decoration-none">
                        {{ $datax->category->name }}
                    </a>
                </h5>

                <article class="my-3 fs-5">
                    {!! $datax->body !!}
                </article>

                <br>
                <a href="/data" class="text-decoration-note btn btn-primary"> Back to Data List</a>
            </div>
        </div>
    </div>
@endsection
