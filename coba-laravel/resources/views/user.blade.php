{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
    <h1>Halaman User</h1>

    @foreach ($data as $file)
    <article class="mb-10">
    <h2> 
      <a href="/user/{{ $file["slug"] }}"> 
        {{ $file['title'] }} 
      </a>
    </h2>
    <h5> By: {{ $file['author'] }}</h5>
    </article>
    <br>
    @endforeach
    
      
@endsection