{{-- @dd($datax) --}}

@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3"> {{ $datax->title }}</h1>

                <a href="/dashboard/data" class="btn btn-success">
                    <span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my posts
                </a>
                <a href="/dashboard/data/{{ $datax->slug }}/edit" class="btn btn-warning">
                    <span data-feather="edit" class="align-text-bottom"></span> Edit
                </a>
                <form action="/dashboard/data/{{ $datax->slug }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger " onclick="return confirm('Are you sure?')">
                        <span data-feather="x-circle" class="align-text-bottom"></span> Delete
                    </button>
                </form>
                <br>
                <br>

                @if ($datax->image)
                    <div style="max-height: 350px; overflow:hidden; ">
                        <img src="{{ asset('storage/' . $datax->image) }}" alt="{{ $datax->title }}" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $datax->category->name }}"
                        alt="{{ $datax->category->name }}" class="img-fluid">
                @endif


                <article class="my-3 fs-5">
                    {!! $datax->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
