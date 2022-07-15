{{-- @dd($datax) --}}

@extends('layouts.main')

@section('container')
<h1>Halaman List {{ $title }}</h1>

<div class="container">
    <div class="row">
        @foreach ($datax as $file)
            <div class="col-md-4">
            
                {{-- Category --}}
                    <?php if ($title === 'Category') { ?>
                        <a href="/data?category={{ $file->slug }}" class="text-decoration-none text-white"> 
                            <div class="card bg-dark text-white">
                                <img src="https://source.unsplash.com/300x200/?{{ $file->name }}" class="card-img" alt="{{ $file->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">
                                        {{ $file->name }}
                                    </h5>
                                </div>
                            </div>
                        </a>
                    <?php } 
                    // Author
                    else if ($title === 'Author') { ?>
                        <a href="/data?author={{ $file->username }}" class="text-decoration-none text-white">     
                            <div class="card bg-dark text-white">
                                <img src="https://source.unsplash.com/300x200/?Author" class="card-img" alt="{{ $file->name }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)">
                                        {{ $file->name }}
                                    </h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    <?php }  ?>
                    <br>
            </div>
            @endforeach
    </div>
</div>



    

@endsection