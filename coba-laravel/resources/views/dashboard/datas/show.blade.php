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
        <a href="" class="btn btn-warning">
            <span data-feather="edit" class="align-text-bottom"></span> Edit
        </a>
        <a href="" class="btn btn-danger">
            <span data-feather="x-circle" class="align-text-bottom"></span> Delete
        </a> 
        <br> 
        <br>
        <img src="https://source.unsplash.com/1200x400/?{{ $datax->category->name }}" alt="{{ $datax->category->name }}" class="img-fluid">

        <article class="my-3 fs-5">
          {!! $datax->body !!}
        </article>

      </div>
    </div>
  </div>
@endsection