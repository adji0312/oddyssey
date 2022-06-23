@extends('layouts.main')

@section('container')

    {{-- FEATURED GAME UNTUK GAME YANG DAPAT POSITIVE REVIEW PALING BANYANK --}}
    <h2>Featured Games</h2><br>
    <div class="d-flex flex-row gap-3">
        {{-- tinggal loop --}}
        <a href="#" class="text-decoration-none text-dark">
            <div class="card shadow" style="width: 14rem;">
                <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h5 class="card-title float-end">Price</h5>
                    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                </div>
            </div>
        </a>
    </div>
    
    <br>

    {{-- HOT GAME YANG PALING BANYAK DIBELI LAST WEEK --}}
    <h2>Hot Games</h2><br>

    <a href="#" class="text-decoration-none text-dark">
        <div class="shadow p-0 mb-3 bg-body rounded">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 120px;" class="img-fluid rounded-start" alt="...">
                    <div class="m-3">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="m-2">
                    <h5>IDR 159.000</h5>
                </div>
            </div>  
        </div>
    </a>

@endsection
