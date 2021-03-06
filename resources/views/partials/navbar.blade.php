{{-- {{ user() }} --}}
<nav class="navbar navbar-expand-lg mb-4 bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/img/logoproject.png" alt="" width="40px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === "Dashboard") ? 'border-bottom border-2 border-primary' : '' }}" aria-current="page" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "Cart") ? 'border-bottom border-2 border-primary' : '' }}" href="/cart">Cart</a>
        </li>
        @auth
          @if (auth()->user()->role == "admin")
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($active === "Admin") ? 'border-bottom border-2 border-primary' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
            </a>
            <ul class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/manageGame">Manage Game</a></li>
              <li><a class="dropdown-item" href="/manageCategory">Manage Category</a></li>
            </ul>
          </li>
          @endif
        @endauth    
      </ul>
      <ul class="navbar-nav ms-auto mx-5">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="navbarDropdown">
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Guest
              </a>
              <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/login">Login</a></li>
              </ul>
            </li>
          @endauth    
      </ul>
    </div>
  </div>
</nav>