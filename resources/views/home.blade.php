@extends('layouts.main')

@section('container')
    {{ now() }}
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="/searchGame">
                <div class="d-flex gap-1 mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn text-white" style="background-color: #374151" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    {{-- FEATURED GAME UNTUK GAME YANG DAPAT POSITIVE REVIEW PALING BANYANK --}}
    <div class="all-container">
        <h2 class="mt-3">Featured Games</h2><br>
        <div class="d-flex flex-row justify-content-between">
            {{-- tinggal loop --}}
            @foreach ($games->take(5) as $game)
                <a href="/game/{{ $game->title }}" class="text-decoration-none text-dark">
                    <div class="card shadow" style="width: 15rem;" >
                        
                        <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            {{ $game->recommendedReview }}
                            <h5 class="card-title">{{ $game->title }}</h5>
                            <p class="card-text">{{ Str::limit($game->description, 100, $end='...') }}</p>
                            @if ($game->price == 0)
                                <h5 class="card-title float-end">FREE</h5>
                            @else
                                <h5 class="card-title float-end">IDR {{ $game->price }}</h5>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    
    <br>
    <br>

    {{-- HOT GAME YANG PALING BANYAK DIBELI LAST WEEK --}}
        <h2>Hot Games</h2><br>
        <div class="justify-content-center d-flex align-items-center"  >
            <div class="row " >
                @foreach ( $games as $game)
                    @foreach ($categories as $category)
                        @if($category->id === $game->categoryID)
                            <a href="/game/{{ $game->title }}" class="text-decoration-none text-dark" style="width: 100% ; ">
                                <div class="shadow p-0 mb-3 bg-body rounded " >
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" style="height: 120px;" class="img-fluid rounded-start" alt="...">
                                            <div class="m-3 mt-4">
                                                <h5 class="card-title">{{ $game->title }}</h5>
                                                <p class="card-text"><small class="text-muted">{{ $category->title }}</small></p>
                                            </div>
                                        </div>
                                        <div class="m-2">
                                            @if ($game->price == 0)
                                                <p class="fs-5 mx-3">FREE</p>
                                            @else 
                                                <p class="fs-5 mx-3">IDR {{ $game->price }}</p>
                                            @endif        
                                        </div>
                                    </div>  
                                </div>
                            </a>
                        @endif    
                    @endforeach
                @endforeach
            </div>
        </div>            
    </div>

@endsection
