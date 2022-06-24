@extends('layouts.main')

@section('container')

    <div class="d-flex justify-content-center mb-2">
        <button class="btn btn-dark m-3 float-center" style="width:160px" type="submit">ADD NEW GAME</button>
    </div>

    {{-- LOOPING SEMUA GAME --}}
    <div class="shadow p-0 mb-3 bg-body rounded">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <img src="https://wallpapercave.com/wp/wp5171877.jpg" style="height: 90px;" class="img-fluid rounded-start" alt="...">
                <div class="m-3">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="m-2 mx-4">
                <p class="text-end mb-1">IDR 159.000</p>
                <div class="d-flex gap-2">
                    <button class="w-100 btn btn-dark" type="submit">UPDATE</button>
                    <button class="w-100 btn btn-danger" type="submit">DELETE</button>
                </div>
            </div>
        </div>  
    </div>
@endsection
