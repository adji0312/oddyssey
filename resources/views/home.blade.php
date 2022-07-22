@extends('layouts.main')

@section('container')
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
                    <div class="card shadow h-100" style="width: 13rem;">
                        <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" class="card-img-top" height="110px" alt="...">
                        <div class="card-body">
                            {{-- {{ $game->recommendedReview }} --}}
                            <h5 class="card-title">{{ $game->title }}</h5>
                            <p class="card-text">{{ Str::limit($game->description, 80, $end='...') }}</p>
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
    
    @if ($hotGames->count() === 0)
        <div class="justify-content-center d-flex align-items-center">
            <div class="row">
                @foreach ($allGames->sortByDesc('created_at')->take(10) as $g)
                    @foreach ($categories as $category)
                        @if($category->id === $g->category_id)
                            <a href="/game/{{ $g->title }}" class="text-decoration-none text-dark" style="width: 100%; ">
                                <div class="shadow p-0 mb-3 bg-body rounded " >
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <img src="/storage/image/{{ $g->title }}/thumbnail.jpg" style="height: 100px; width:220px;" class="img-fluid rounded-start" alt="...">
                                            <div class="m-3 mt-4">
                                                <h5 class="card-title">{{ $g->title }}</h5>
                                                <p class="card-text"><small class="text-muted">{{ $category->title }}</small></p>
                                            </div>
                                        </div>
                                        <div class="m-2">
                                            @if ($g->price == 0)
                                                <p class="fs-5 mx-3">FREE</p>
                                            @else 
                                                <p class="fs-5 mx-3">IDR {{ $g->price }}</p>
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
    @else
        @foreach ( $hotGames->sortByDesc('created_at')->take(10) as $game)
            <?php $diff = now()->diffInDays($game->created_at) ?>
                @if ($diff <= 7)
                    @foreach ($allGames as $g)
                        @if ($g->id == $game->game_id)
                            @foreach ($categories as $category)
                                @if($category->id === $g->category_id)
                                    <div class="row justify-content-center d-flex align-items-center shadow p-0 mb-3 rounded " >
                                        <a href="/game/{{ $g->title }}" class="text-decoration-none text-dark mb-0 p-0 " >
                                            
                                            <div class="d-flex justify-content-between align-items-center" >
                                                <div class="d-flex">
                                                    <img src="/storage/image/{{ $g->title }}/thumbnail.jpg" style="height: 100px;" class="img-fluid rounded-start" alt="...">
                                                    <div class="m-3 mt-4">
                                                        <h5 class="card-title">{{ $g->title }}</h5>
                                                        <p class="card-text"><small class="text-muted">{{ $category->title }}</small></p>
                                                    </div>
                                                </div>
                                                <div>
                                                    @if ($g->price == 0)
                                                        <p class="fs-5 mx-3">FREE</p>
                                                    @else 
                                                        <p class="fs-5 mx-3">IDR {{ $g->price }}</p>
                                                    @endif 
                                                </div>
    
                    
                                            </div>    
                                        </a>
                                    </div>
                                @endif    
                            @endforeach
                        @endif    
                    @endforeach     
                @endif
        @endforeach
        
    @endif
</div>

@endsection
