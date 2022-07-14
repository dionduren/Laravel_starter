{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
  <h2> {{ $datax->title }}</h2>
  <h5> 
    By 
      <a href="/authors/{{ $datax->author->username }}" class="text-decoration-none">
        {{ $datax->author->name }}
      </a>
    in
      <a href="/categories/{{ $datax->category->slug }}" class="text-decoration-none">
        {{ $datax->category->name }}
      </a>
  </h5>

  {!! $datax->body !!}

  <br><br>
  <a href="/data"> Back to Data List</a>
@endsection