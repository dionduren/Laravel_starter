@extends('layouts.main')

@section('container')
    <h1>Halaman Admin</h1>
  <ul>
    <li>{{ $name }}</li>
    <li>{{ $hp }}</li>
    <li>{{ $email }}</li>
  </ul>
  <img src="{{ $image }}" alt=" Foto {{ $name }}" class="img-thumbnail rounded-circle">
  
@endsection