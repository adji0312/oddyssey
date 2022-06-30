@extends('layouts.main')

@section('container')
    @if($carts->count() != 0)
        <h4 class="card-title m-3">Your Cart</h4>

        <div class="shadow p-2 mb-2 bg-body rounded m-3">
            {{-- LOOPING DISINI CART NYA --}}
            {{-- {{ $carts }} --}}
            {{-- {{ $user->name }} --}}
                @foreach ($carts as $cart)
                    @foreach ($games as $game)
                        @if($cart->gameID == $game->id)
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="d-flex">
                                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 90px;" class="img-fluid rounded" alt="...">
                                    <div class="m-3">
                                        <h5 class="card-title">{{ $game->title }}</h5>
                                        <p class="card-text"><small class="text-muted">Category</small></p>
                                    </div>
                                </div>
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
                        {{-- {{ $total }} --}}
                        {{-- @foreach ($carts as $cart)
                            @foreach ($games as $game)
                                @if($cart->gameID == $game->id)
                                    <p class="card-text"><small class="text-muted">{{ $total }}</small></p>
                                @endif    
                            @endforeach
                        @endforeach --}}
                    </div>
                </div>
                <div class="m-2">
                    @foreach ($carts as $cart)
                        @foreach ($games as $game)
                            @if($cart->gameID == $game->id)
                                <?php $total += $game->price ?>
                                {{-- {{ $game->sum('price') }} --}}
                                {{-- {{ $game->price->sum() }} --}}
                            @endif
                        @endforeach
                    @endforeach
                    <p>IDR {{ $total }}</p>
                </div>
            </div>
        </div>

        <button class="btn btn-dark float-end m-3" style="width:120px" type="submit">CHECKOUT</button>
    @else
        <div class="text-center">
            <h1 class="card-title mb-4">Your Cart is Empty!</h1>
            <img src="/img/shopping-cart-icon.png" style="width:200px;"><br>
            <p class="mt-5 btn bg-white shadow"><a href="/" class="text-decoration-none text-dark">Let's Go Buy Game</a></p>
        </div>    
    @endif
@endsection
