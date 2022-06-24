@extends('layouts.main')

@section('container')
    <h4 class="card-title m-3">Your Cart</h4>

    <div class="shadow p-2 mb-2 bg-body rounded m-3">
        {{-- LOOPING DISINI CART NYA --}}
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex">
                <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 90px;" class="img-fluid rounded" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Game Title</h5>
                    <p class="card-text"><small class="text-muted">Category</small></p>
                </div>
            </div>
            <div class="m-2">
                <p class="mb-1">IDR 159.000</p>
                <button class="w-100 btn btn-danger" type="submit">REMOVE</button>
            </div>
        </div>   

        <hr style="width:100%", size="2">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex">
                <div class="m-2">
                    <h5 class="card-title">Total</h5>
                    <p class="card-text"><small class="text-muted">jumlah game</small></p>
                </div>
            </div>
            <div class="m-2">
                <p>IDR 159.000</p>
            </div>
        </div>
    </div>

    <button class="btn btn-dark float-end m-3" style="width:120px" type="submit">CHECKOUT</button>
@endsection
