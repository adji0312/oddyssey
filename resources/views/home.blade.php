@extends('layouts.main')

@section('container')

    {{-- FEATURED GAME UNTUK GAME YANG DAPAT POSITIVE REVIEW PALING BANYANK --}}
    <h2>Featured Games</h2><br>
    <div class="d-flex flex-row gap-2">
        {{-- tinggal loop --}}
        @foreach ($games->take(5) as $game)
            <a href="/game/{{ $game->title }}" class="text-decoration-none text-dark">
                <div class="card shadow" style="width: 14rem;">
                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
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

    {{-- HOT GAME YANG PALING BANYAK DIBELI LAST WEEK --}}
    <h2>Hot Games</h2><br>

    @foreach ( $games as $game)
        @foreach ($categories as $category)
            @if($category->id === $game->categoryID)
                <a href="/game/{{ $game->title }}" class="text-decoration-none text-dark">
                    <div class="shadow p-0 mb-3 bg-body rounded" style="width: 1150px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex">
                                <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 120px;" class="img-fluid rounded-start" alt="...">
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

@endsection
