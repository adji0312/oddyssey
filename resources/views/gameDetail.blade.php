@extends('layouts.main')

@section('container')
    <div class="d-flex m-3 justify-content-between">
        <div class="card position-sticky shadow" style="width: 18rem;">
            <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><br>
                <a href="#" class="btn btn-dark">ADD TO CART</a>
            </div>
        </div>

        {{-- CAROUSEL --}}
        <div id="carouselExampleControls" class="carousel slide shadow" data-bs-ride="carousel">
            <div class="carousel-inner">
                {{-- LOOPING GAMBAR NYA --}}
                <div class="carousel-item active">
                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="d-block rounded" alt="..." width="700px">
                </div>
                <div class="carousel-item">
                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="d-block rounded" alt="..." width="700px">
                </div>
                <div class="carousel-item">
                    <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="d-block rounded" alt="..." width="700px">
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

    {{-- <div class="card-group m-3">
        <div class="card">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <h5 class="card-title">Card title</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <h5 class="card-title">Card title</h5>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <h5 class="card-title">Card title</h5>
            </div>
        </div>
    </div> --}}

    <div class="d-flex justify-content-between m-3 bg-white shadow rounded align-items-center">
        <div class="m-3 p-1">
            <p class="card-text mb-0"><small class="text-muted">Genre</small></p>
            <h5 class="card-title">Card title</h5>
        </div>
        <div class="m-3 p-1">
            <p class="card-text mb-0"><small class="text-muted">Release Date</small></p>
            <h5 class="card-title">Card title</h5>
        </div>
        <div class="m-3 p-1">
            <p class="card-text mb-0"><small class="text-muted">All Reviews</small></p>
            <p class="mb-0">1 Recommended</p>
            <p>1 Recommended</p>
        </div>
    </div>
    
    {{-- <br> --}}
    <h4 class="m-3 mt-4">More Like This</h4>
    <div class="d-flex justify-content-between m-3 mb-4">
        {{-- DISINI TINGGAL LOOPING 3x UNTUK GAME YANG KATEGORI NYA SAMA --}}
        <div class="text-end">
            <img src="https://wallpapercave.com/wp/wp5171877.jpg" class="shadow rounded" alt="..." width="350px">
            <h5 class="card-title mt-2">IDR</h5>
        </div>
    </div>
    

    {{-- <br> --}}
    {{-- COMMENT SECTION --}}
    <div class="card m-3 shadow" style="width: 68rem;">
        <div class="card-body">
            <h5 class="card-title">Leave a Review!</h5>
            <form action="" method="post">
                <div class="d-flex">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Recommended</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Not Recommended</label>
                    </div>
                </div>

                <textarea class="mt-2 mb-2" name="" id="" cols="140" rows="5"></textarea>
            </form>
            <a href="#" class="btn btn-dark">POST</a>
        </div>
    </div>

    {{-- REVIEW SECTION --}}
    {{-- LOOP SEMUA REVIEW DI GAME --}}
    <div class="card m-3 shadow" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">NAMA USER</h5>
            {{-- DI IMG, KASI INDIKATOR, KALAU YANG KOMEN REKOMENDED KASI GAMBAR LIKE, ELSE NOTLIKE --}}
            <img src="img/like.png" alt="..." width="30px">     Recommended
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>

@endsection
