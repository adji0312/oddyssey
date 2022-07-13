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

    <div class="container">
        <div class="row mt-4">
            @foreach ($games as $game)
                <div class="col-md-3 mb-3">
                    <a href="/game/{{ $game->title }}" class="text-decoration-none text-dark">
                        <div class="card shadow" style="width: 16rem;">
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
                </div>
            @endforeach
        </div>
    </div>
    <div class="mb-3">
        Showing {{ $games->firstItem() }} to {{ $games->lastItem() }} of total {{$games->total()}} entries
    </div>
    <div class="float-end color-success">
        {{ $games->links() }}
    </div>
@endsection