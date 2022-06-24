<nav class="navbar navbar-expand-lg mb-4 bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="img/logoproject.png" alt="" width="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav">
        {{-- <li class="nav-item">
            <img src="img/logoproject.png" alt="" width="20px">
        </li> --}}
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cart">Cart</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link" href="#">Admin</a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Admin
          </a>
          <ul class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/manageGame">Manage Game</a></li>
            <li><a class="dropdown-item" href="/manageCategory">Manage Category</a></li>
            {{-- <li><hr class="dropdown-divider"></li> --}}
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mx-5">
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Guest</a>
          </li> --}}

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Guest
            </a>
            <ul class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/login">Login</a></li>
              {{-- <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>