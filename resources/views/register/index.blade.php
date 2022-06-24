@extends('layouts.setup')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <div class="text-center">
        <img class="mb-4" src="/img/logoproject.png" alt="" width="72">
      </div>
      <form action="/register" method="post" class="bg-light p-4 rounded">
        @csrf
        <div class="form-floating">
          <p class="mb-0">Name</p>
          <input style="height: 15px;" type="text" name="name" class="form-control rounded" id="floatingInput" placeholder="Name">
        </div>
        <div class="form-floating">
          <p class="mb-0 mt-2">Email</p>
          <input style="height: 15px;" type="email" name="email" class="form-control rounded" id="floatingInput" placeholder="name@example.com">
        </div>
        <div class="form-floating">
          <p class="mb-0 mt-2">Password</p>
          <input style="height: 15px;" type="password" name="password" class="form-control rounded" id="floatingPassword" placeholder="Password">
        </div>
        <div class="form-floating">
          <p class="mb-0 mt-2">Confirm Password</p>
          <input style="height: 15px;" type="password" name="confirmpassword" class="form-control rounded" id="floatingPassword" placeholder="ConfirmPassword">
        </div>
        <form action="/register" method="post" class="bg-light p-4 rounded shadow">
          @csrf
          <div class="form-floating">
            <p class="mb-0">Name</p>
            <input style="height: 15px;" type="text" name="name" class="form-control rounded" id="floatingInput" placeholder="Name">
          </div>
          <div class="form-floating">
            <p class="mb-0 mt-2">Email</p>
            <input style="height: 15px;" type="email" name="email" class="form-control rounded" id="floatingInput" placeholder="name@example.com">
          </div>
          <div class="form-floating">
            <p class="mb-0 mt-2">Password</p>
            <input style="height: 15px;" type="password" name="password" class="form-control rounded" id="floatingPassword" placeholder="Password">
          </div>
          <div class="form-floating">
            <p class="mb-0 mt-2">Confirm Password</p>
            <input style="height: 15px;" type="password" name="confirmpassword" class="form-control rounded" id="floatingPassword" placeholder="ConfirmPassword">
          </div>

        <div class="d-flex justify-content-end mt-3 gap-2">
          <small class="d-block text-center mt-3 mb-3"><a class="text-decoration-underline text-dark" href="/login">Already Registered?</a></small>
          <button class="btn btn-lg btn-dark h-50" type="submit">REGISTER</button>
        </div>  
      </form>
    </main>
  </div>
</div>


@endsection
