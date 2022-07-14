{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
  <h2> {{ $data->title }}</h2>
  <h5> <a href="#" class="text-decoration-none">{{ $data->user->name }}</a></h5>
  {{-- pemanggilan data agar bisa mengikuti format HTML --}}
  {!! $data->body !!}
</article>

<a href="/user"> Back to User</a>
@endsection