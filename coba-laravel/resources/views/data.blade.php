{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
  <h2> {{ $datax->title }}</h2>
  <h5> <a href="/authors/{{ $datax->author->id }}" class="text-decoration-none">{{ $datax->author->name }}</a></h5>
  {{-- pemanggilan data agar bisa mengikuti format HTML --}}
  {!! $datax->body !!}
</article>
<br><br>
<a href="/data"> Back to Data List</a>
@endsection