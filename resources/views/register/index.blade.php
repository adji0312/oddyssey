@extends('layouts.setup')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <div class="text-center">
        <img class="mb-4" src="/img/logoproject.png" alt="" width="72">
      </div>

      <form action="/register" method="post" class="bg-light p-4 rounded shadow">
        @csrf

        {{-- NAME --}}
        <div class="form-floating">
          <p class="mb-0">Name</p>
          <div class="mb-3">
            <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        {{-- EMAIL --}}
        <div class="form-floating">
          <p class="mb-0 mt-2">Email</p>
          <div class="mb-3">
            <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>  
        </div>

        {{-- PASSWORD --}}
        <div class="form-floating">
          <p class="mb-0 mt-2">Password</p>
          <div class="mb-3">
            <input type="password" name="password" class="form-control rounded @error('password') is-invalid @enderror" id="password">
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>  
        </div>

        {{-- CONFIRM PASSWORD --}}
        <div class="form-floating">
          <p class="mb-0 mt-2">Confirm Password</p>
          <div class="mb-3">
            <input type="password" name="confirmPassword" class="form-control rounded @error('confirmPassword') is-invalid @enderror" id="confirmPassword">
            @error('confirmPassword')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>  
        </div>

        {{-- BUTTON REGISTER --}}
        <div class="d-flex justify-content-end mt-3 gap-2">
          <small class="d-block text-center mt-3 mb-3"><a class="text-decoration-underline text-dark" href="/login">Already Registered?</a></small>
          <button class="btn btn-dark h-50" type="submit">REGISTER</button>
        </div>
        
      </form>
    </main>
  </div>
</div>


@endsection
