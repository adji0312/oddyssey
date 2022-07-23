@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
   <div class="col-lg-5">
     <main class="form-registration w-100 m-auto">
       
       <form action="{{ url('manageGame/updateGame/'.$newGame['id']) }}" method="post" class="bg-light p-4 shadow rounded" enctype="multipart/form-data">
         @method('put')
         @csrf
         <div class="text-center">
            <p class="text-center fw-bold fs-4">Update Game</p>
         </div>

         {{-- ERROR MESSAGE --}}
         @if (count($errors) > 0)
         <div class="alert alert-danger">
            <strong>There were some problems with your input.</strong><br><br>
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif

         {{-- SUCCESS MESSAGE --}}
         @if(session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div> 
         @endif


         {{-- TITLE --}}
         <div class="form-floating">
            <div class="mb-3">
               <label for="title" style="font-weight: 600 ;">Title</label>    
               <input type="text" name="title" class="form-control rounded @error('title') is-invalid @enderror" id="title" required value="{{ $newGame->title }}">
            </div>
            @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
         </div>

         {{-- CATEGORY --}}
         <div class="form-floating">
            <div class="mb-3">
               <label for="title" style="font-weight: 600 ;">Category</label> 
               <select class="form-control" id="category_id" name="category_id" required>
                  <option placeholder="Category" selected></option>
                  @foreach ($categories as $category)
                     @if ($category->id === $newGame->category_id)
                        <option value={{ $category->id }} selected>{{ $category->title }}</option>
                     @else 
                        <option value={{ $category->id }}>{{ $category->title }}</option>
                     @endif
                  @endforeach
               </select>
            @error('category')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
         </div>
        
         {{-- PRICE --}}
         <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">IDR</span>
            <input type="number" name="price" class="form-control rounded-end @error('price') is-invalid @enderror" id="price" required value="{{ $newGame->price }}" >
             @error('price')
               <div class="invalid-feedback">
                 {{ $message }}
               </div>
             @enderror
         </div>

         {{-- THUMBNAIL --}}
         <div class="mb-3">
            <label for="thumbnail" class="form-label" style="font-weight: 600 ;">Thumbnail</label>
            <input class="form-control rounded" type="file" id="thumbnail" name="thumbnail">
         </div>

         {{-- SLIDER --}}
         <div class="mb-3">
            <label for="slidesPicture" class="form-label" style="font-weight: 600 ;">Slider</label>
            <input class="form-control rounded" type="file" id="slidesPicture" name="slidesPicture[]" multiple src="/storage/image/{{ $newGame->thumbnail }}" >
         </div>

         {{-- DESCRIPTION --}}
         <div class="mb-3">
            <label for="description" style="font-weight: 600 ;">Description</label>
            <textarea class="form-control rounded" id="description" rows="3" name="description">{{ $newGame->description }}</textarea>
         </div>

         {{-- BUTTON --}}
         <div class="d-flex justify-content-start mt-3 gap-2">
            <div class="fw-bolder">
               <button class="btn btn-sm btn-dark font-bolder" type="submit">UPDATE GAME</button>
            </div>
         </div>  

       </form>
     </main>
   </div>
 </div>

@endsection
