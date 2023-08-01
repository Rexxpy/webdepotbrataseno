<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Roboto:wght@400&display=swap" rel="stylesheet">


<style>
  .nav-item{
    font-family:'Open Sans', sans-serif;
    font-size: 17px;
    padding : 0 10px 0 10px;
  }

  .navbar-brand{
    font-family:'Roboto', sans-serif;
    font-size: 20px;
  }
</style>

<nav class="navbar navbar-expand-lg py-2 sticky-top navbar-dark fs-5" style="background-color: rgb(28, 28, 28)" >
  <div class="container">
  <a class="navbar-brand" href="#">
    <img src="../image/bratasenaa.png" alt="nav-logo" width="10%">&nbsp
    Rumah Makan Bratasena
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav">
      <a class="nav-item nav-link {{ ($title == "Home") ? 'active' : ''}}" href="/">Home <span class="sr-only"></span></a>
      <a class="nav-item nav-link {{ ($title == "About") ? 'active' : ''}}" href="/about">About</a>
      <a class="nav-item nav-link {{ ($title == "Menu") ? 'active' : ''}}" href="/menu">Menu</a>
      <a class="nav-item nav-link {{ ($title == "Cart") ? 'active' : ''}}" href="/cart"><i data-feather="shopping-cart"></i></a>
    </div>

    <ul class="navbar-nav">
          @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                  </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="/logout" method="POST">
                          @csrf
                          <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                      </li>
                    </ul>
                </li>
              @else
                <ul class="navbar-nav ms-auto" style="padding-left: 20px">
                  <li class="nav-item">
                    <a href="/login" class="nav-link {{ ($title == "Login") ? 'active' : ''}}" href="/login"><i data-feather="log-in"></i></a>
                    {{-- <a href="/register" class="nav-link {{ ($title == "Register") ? 'active' : ''}}" href="/register">Register</a> --}}
                  </li>
                </ul>
            @endauth
      </ul>
  </div>
  </div>
</nav>



