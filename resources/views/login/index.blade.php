@extends('layouts.setup')

@section('container')

  <div class="row justify-content-center">
    <div class="col-lg-5">
      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <main class="form-signin w-100 m-auto">
        <div class="text-center">
          <img class="mb-4" src="/img/logoproject.png" alt="" width="72">
        </div>
        <form action="/login" method="post" class="bg-light p-4 rounded shadow">
          @csrf
          <div class="form-floating">
            <p class="mb-0">Email</p>
            <div class="mb-3">
              <input type="email" name="email" class="form-control rounded @error('email') is invalid @enderror" id="email" placeholder="email" autofocus required value="{{ old('email') }}">
            </div>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <p class="mb-0 mt-2">Password</p>
            <div class="mb-3">
              <input type="password" name="password" class="form-control rounded" id="password" placeholder="password">
            </div>
            {{-- <input type="password" class="form-control rounded" id="floatingPassword" placeholder="Password"> --}}
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="rememberMe" name="rememberMe"> Remember me
            </label>
          </div>
          <small class="d-block text-center mt-3 mb-3">
              <a class="text-decoration-underline text-dark" href="/register"> Don't have an account? Register Now!</a>
          </small>
          <div class="d-flex justify-content-center">
            <button class="btn btn-lg btn-dark" type="submit">LOG IN</button>
          </div>  
        </form>
      </main>
    </div>
  </div>
</body>
</html>

@endsection
