{{-- @dd($data) --}}

@extends('layouts.main')

@section('container')
<h2> {{ $data->title }}</h2>
{{-- <h5> By: {{ $data["author"] }}</h5> --}}
{{-- pemanggilan data agar bisa mengikuti format HTML --}}
{!! $data->body !!}
</article>

<a href="/user"> Back to User</a>
@endsection