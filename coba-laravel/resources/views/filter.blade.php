@extends('layouts.main')

@section('container')
<h1>Halaman List {{ $title }}</h1>

<ul>
    @foreach ($datax as $file)
    <article class="mb-10">
        <li>
            <?php if ($title === 'Category') { ?>
                <h2><a href="/categories/{{ $file->slug }}"> {{ $file->name }}</a></h2>
            <?php } else if ($title === 'Author') { ?>
                <h2><a href="/authors/{{ $file->username }}"> {{ $file->name }}</a></h2>
            <?php }  ?>
        </li>
    </article>
    <br>
    @endforeach
</ul>
@endsection