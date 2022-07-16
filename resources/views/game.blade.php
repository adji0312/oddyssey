@extends('layouts.main')

@section('container')

{{--  --}}
    <div class="d-flex m-3 row">
        <div class="card position-sticky shadow col-4" >
            <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" class="card-img-top img-fluid" alt="..." >
            <div class="card-body">
                <h5 class="card-title">{{ $game->title }}</h5>
                <p class="card-text">{{ Str::limit($game->description, 100, $end='...') }}</p><br>
                <form method="post" action="{{ url('cart', $game->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-dark">ADD TO CART</button>
                </form>    
            </div>
        </div>

        {{-- CAROUSEL --}}
        <div id="carouselExampleControls" class="carousel slide col-8" data-bs-ride="carousel">
            <div class="carousel-inner">
                {{-- LOOPING GAMBAR NYA --}}
                <div class="carousel-item active">
                    <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" class="d-block rounded img-fluid" alt="..." >
                </div>
                <div class="carousel-item">
                    <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" class="d-block rounded img-fluid" alt="..." >
                </div>
                <div class="carousel-item">
                    <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" class="d-block rounded img-fluid" alt="..." >
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    {{--  --}}


    {{-- DETAIL GAME + TOTAL REVIEW SECTION --}}
    <div class="d-flex m-3 bg-white shadow rounded row">
        <div class="mt-3 mb-4 col-4">
            <p class="card-text ms-4"><small class="text-muted">Genre</small></p>
            @foreach ($category as $c)
                <h5 class="card-title ms-4">{{ $c->title }}</h5>
            @endforeach
        </div>
        <div class="mt-3 col-4">
            <p class="card-text ms-4"><small class="text-muted">Release Date</small></p>
            <h5 class="card-title ms-4">20 October 2021</h5>
        </div>
        <div class="mt-3  col-4">
            <p class="card-text ms-4"><small class="text-muted">All Reviews</small></p>
            <p class="ms-4">{{ $game->recommendedReview }} Recommended</p>
            <p class="ms-4">{{ $game->notRecommendedReview }} Not Recommended</p>
        </div>
    </div>
    
    {{-- <br> --}}
    {{-- SHOW 3 GAMES WITH SAME CATEGORY (CUMA MASI BINGUNG SORT BY APA?) --}}
    <h4 class="m-3 mt-4">More Like This</h4>
    <div class="d-flex justify-content-between m-3 mb-4">
        {{-- DISINI TINGGAL LOOPING 3x UNTUK GAME YANG KATEGORI NYA SAMA --}}
        @foreach ($games->take(3)->where('title','!=',$game->title) as $g)
            {{-- @if ($game->id != $g->id) --}}
                <div class="text-end">
                    <a href="/game/{{ $g->title }}" class="text-decoration-none text-dark">
                        <img src="/storage/image/{{ $g->title }}/thumbnail.jpg" class="shadow rounded" alt="..." width="350px">
                    </a>
                    @if ($g->price === 0)
                        <h5 class="card-title mt-2">FREE</h5>
                    @else
                        <h5 class="card-title mt-2">IDR {{ $g->price }}</h5>
                    @endif    
                </div>
            {{-- @endif --}}
        @endforeach
        {{-- {{ dd($games->take(3)->where('title','!=',$game->title)) ;  }} --}}
    </div>
    

    {{-- <br> --}}
    {{-- COMMENT SECTION --}}
    <div class="card m-3 shadow" style="width: 68rem;">
        <div class="card-body">
            <h5 class="card-title">Leave a Review!</h5>
            <form action="{{ url('game', $game->id) }}" method="post">
                @csrf
                <div class="d-flex">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" value="recommended">
                        <label class="form-check-label" for="inlineRadio1">Recommended</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" value="notRecommended">
                        <label class="form-check-label" for="inlineRadio2">Not Recommended</label>
                    </div>
                </div>
                <textarea class="mt-2 mb-2" name="comment" id="" cols="140" rows="5" value="{{ old('comment') }}"></textarea>
                @error('comment')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <button class="btn btn-dark" type="submit">POST</button>
            </form>
        </div>
    </div>

    {{-- REVIEW SECTION --}}
    {{-- LOOP SEMUA REVIEW DI GAME --}}
    <div class="container">
        <div class="row">
            @foreach ($reviews as $review)
                <div class="col-md-3 mb-4 card m-3 shadow" style="width: 18rem;">
                    <div class="card-body">
                        @foreach ($users as $user)
                            @if ($user->id === $review->userID)
                                <h5 class="card-title">{{ $user->name }}</h5>
                            @endif                           
                        @endforeach
                        {{-- DI IMG, KASI INDIKATOR, KALAU YANG KOMEN REKOMENDED KASI GAMBAR LIKE, ELSE NOTLIKE --}}
                        @if ($review->status == "recommended")
                            <div class="d-flex gap-2 mb-3">
                                <img src="/img/like.png" class="" alt="..." width="30px">
                                Recommended
                            </div>
                        @else
                            <img src="/img/notLike.png" alt="..." width="30px">
                            Not Recommended    
                        @endif
                        <p class="card-text">{{ $review->comment }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    

@endsection
