@extends('layouts.main')

@section('container')

   <div class="d-flex justify-content-center">
      <a href="/addGame">
         <div class="btn btn-dark">
            ADD CATEGORY
         </div>
      </a>
   </div>  

    {{-- <div class="d-flex justify-content-center mb-2">
        <button class="btn btn-dark m-3 float-center" style="width:160px" type="submit">ADD NEW GAME</button>
    </div> --}}

    {{-- LOOPING SEMUA GAME --}}
    <div class="shadow p-0 mb-3 mt-3 bg-body rounded">
        <div class="d-flex justify-content-between align-items-center">
           
            <div class="m-3">
               <h5 class="card-title">Card title</h5>
            </div>
            <div class="d-flex gap-2 m-3">
               <button class="w-100 btn btn-dark" type="submit">UPDATE</button>
               <button class="w-100 btn btn-danger" type="submit">DELETE</button>
            </div>
           
        </div>  
    </div>
    
@endsection
