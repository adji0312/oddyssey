@extends('layouts.main')

@section('container')

    {{-- FEATURED GAME UNTUK GAME YANG DAPAT POSITIVE REVIEW PALING BANYANK --}}
    <h2>Featured Games</h2><br>
    <div class="d-flex flex-row gap-3">
        {{-- tinggal loop --}}
        <a href="" class="text-decoration-none text-dark">
            <div class="card" style="width: 14rem;">
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
    <div class="card mb-2" style="max-width: 1700px; height: 120px;">
        <div class="row g-0">
            <div class="col-md-2">
                <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 120px;" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    <p>Price</p>
                </div>
            </div>
        </div>
    </div>

@endsection
