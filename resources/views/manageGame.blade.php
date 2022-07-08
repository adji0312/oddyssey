@extends('layouts.main')

@section('container')

   <div class="d-flex justify-content-center">
      <a href="/addGame">
         <div class="btn btn-dark">
            ADD NEW GAME
         </div>
      </a>
   </div>  

    {{-- <div class="d-flex justify-content-center mb-2">
        <button class="btn btn-dark m-3 float-center" style="width:160px" type="submit">ADD NEW GAME</button>
    </div> --}}

    {{-- LOOPING SEMUA GAME --}}
    @foreach ($games as $game)
        <div class="shadow p-0 mb-3 mt-3 bg-body rounded">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 90px;" class="img-fluid rounded-start" alt="...">
                    <div class="m-3">
                        <h5 class="card-title">{{ $game->title }}</h5>
                        @foreach ($categories as $category)
                            @if ($category->id === $game->categoryID)
                                <p class="card-text"><small class="text-muted">{{ $category->title }}</small></p>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="m-2 mx-4">
                    @if ($game->price === 0)
                        <p class="text-end mb-1">FREE</p>
                    @else
                        <p class="text-end mb-1">IDR {{ $game->price }}</p>
                    @endif
                    <div class="d-flex gap-2">
                        <form action="" method="post">
                            <button class="w-100 btn btn-dark" type="submit">UPDATE</button>
                        </form>
                        <form action="" method="post">
                            <button class="w-100 btn btn-danger" type="submit">DELETE</button>
                        </form>    
                    </div>
                </div>
            </div>  
        </div>
    @endforeach
    <div class="mb-3">
        Showing {{ $games->firstItem() }} to {{ $games->lastItem() }} of total {{$games->total()}} entries
    </div>    
    <div class="float-end color-success">
        {{ $games->links() }}
    </div>
@endsection
