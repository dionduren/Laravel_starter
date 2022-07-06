{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
<h2> {{ $data["title"] }}</h2>
<h5> By: {{ $data["author"] }}</h5>
<p> {{ $data["body"] }}</p>
</article>

<a href="/user"> Back to User</a>
@endsection