@extends('layouts.setup')

@section('container')

  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-signin w-100 m-auto">
        <div class="text-center">
          <img class="mb-4" src="/img/logoproject.png" alt="" width="72">
        </div>
        <form action="/login" method="post" class="bg-light p-4 rounded shadow">
          @csrf
          <div class="form-floating">
            <p class="mb-0">Email</p>
            <input type="email" class="form-control rounded" id="floatingInput" placeholder="name@example.com">
          </div>
          <div class="form-floating">
            <p class="mb-0 mt-2">Password</p>
            <input type="password" class="form-control rounded" id="floatingPassword" placeholder="Password">
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <small class="d-block text-center mt-3 mb-3"><a class="text-decoration-underline text-dark" href="/register">Don't have an account? Register Now!</a></small>
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
