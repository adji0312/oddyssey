@extends('layouts.main')

@section('container')
    @if(session()->has('successBuy'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('successBuy') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if($carts->count() != 0)
        <h4 class="card-title m-3">Your Cart</h4>

        <div class="shadow p-2 mb-2 bg-body rounded m-3">
            {{-- LOOPING DISINI CART NYA --}}
                @foreach ($carts as $cart)
                    @foreach ($games as $game)
                        @if($cart->gameID == $game->id)
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <a href="/game/{{ $game->title }}" class="text-decoration-none text-dark">
                                    <div class="d-flex">
                                        <img src="/storage/image/{{ $game->title }}/thumbnail.jpg" style="height: 100px; width:200px;" class="img-fluid rounded" alt="...">
                                        <div class="m-3">
                                            <h5 class="card-title">{{ $game->title }}</h5>
                                            @foreach ($categories as $c)
                                                @if ($c->id == $game->categoryID)
                                                    <p class="card-text"><small class="text-muted">{{ $c->title }}</small></p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </a>    
                                <div class="m-2 text-center">
                                    @if($game->price == 0)
                                        <p class="mb-1">FREE</p>
                                    @else
                                        <p class="mb-1">IDR {{ $game->price }}</p>
                                    @endif
                                    <form action="/cart/{{ $cart->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="w-100 btn btn-danger" type="submit" onclick="return confirm('Are you sure want to remove?')">REMOVE</button>
                                    </form>   
                                </div>
                            </div>
                        @endif    
                    @endforeach
                @endforeach
                
            <hr style="width:100%", size="2">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="d-flex">
                    <div class="m-2">
                        <h5 class="card-title">Total</h5>
                    </div>
                </div>
                <div class="m-2">
                    @foreach ($carts as $cart)
                        @foreach ($games as $game)
                            @if($cart->gameID == $game->id)
                                <?php $total += $game->price ?>
                            @endif
                        @endforeach
                    @endforeach
                    <p>IDR {{ $total }}</p>
                </div>
            </div>
        </div>

            {{-- <form method="post" action="/cart">
                @csrf --}}
                <button class="btn btn-dark float-end m-3" style="width:120px" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">CHECKOUT</button>
            {{-- </form> --}}
            
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">CHECKOUT</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                        <form method="post" action="/cart">
                            @csrf
                            <button type="submit" class="btn btn-dark">Yes</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

    @else
        <div class="text-center">
            <h1 class="card-title mb-4">Your Cart is Empty!</h1>
            <img src="/img/shopping-cart-icon.png" style="width:180px;"><br>
            <a href="/" class="btn btn-dark m-3 mt-3">Let's Go Buy Game</a>
        </div>    
    @endif
@endsection
