@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
   <div class="col-lg-5">
     <main class="form-registration w-100 m-auto">
       
       <form action="/addCategory" method="post" class="bg-light p-4 shadow rounded">
         @csrf
         <div class="text-center">
            <p class="text-center fw-bold fs-4">Add Category</p>
          </div>

         <div class="mb-3">
            <input type="title" class="form-control rounded @error('title') is-invalid @enderror" id="title" name="title" placeholder="Category">
            @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
         </div>
         
         <div class="d-flex justify-content-start mt-3 gap-2">
            <div class="fw-bolder">
               <button class="btn btn-sm btn-dark font-bolder" type="submit">ADD CATEGORY</button>
            </div>
         </div>  
       </form>
     </main>
   </div>
 </div>

@endsection
