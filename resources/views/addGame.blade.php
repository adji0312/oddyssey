@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
   <div class="col-lg-5">
     <main class="form-registration w-100 m-auto">
       
       <form action="/register" method="post" class="bg-light p-4 rounded">
         @csrf
         <div class="text-center">
            <p class="text-center fw-bold fs-4">Add Game</p>
          </div>
         <div class="mb-3">
            <input type="title" class="form-control rounded" id="title" placeholder="Title">
         </div>
         <div class="mb-3">
            <input type="category" class="form-control rounded" id="category" placeholder="Category">
         </div>
        
         <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">IDR</span>
            <input type="text" class="form-control" placeholder="Price" aria-label="price" aria-describedby="basic-addon1">
          </div>

         <div class="mb-3">
           <label for="formFile" class="form-label">Thumbnail</label>
            <input class="form-control" type="file" id="formFile">
         </div>
         <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Slider</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
         </div>

         <div class="mb-3">
            <textarea class="form-control" id="description" rows="3"></textarea>
          </div>


         <div class="d-flex justify-content-start mt-3 gap-2">
            <div class="fw-bolder">
               <button class="btn btn-sm btn-dark font-bolder" type="submit">ADD GAME</button>
            </div>
         </div>  
       </form>
     </main>
   </div>
 </div>

@endsection
