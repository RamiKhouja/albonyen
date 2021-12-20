<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Al Bonyen</title>
    <link rel="shortcut icon" type="image/png" href="/img/fav.png"/>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
    <link href="/css/styles.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    
    <!--Owl Carousel-->
    <link rel="stylesheet" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/css/owl.theme.default.min.css"/>
    
</head>
<body style="margin: 0 !important;">
  <header class="navbar fixed-top">
    <div class="container d-flex flex-wrap justify-content-center border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img class="logo" src="/img/logo.png"/>
      </a>
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link  {{ (request()->is('/')) ? 'active' : '' }}">Home</a></li>
        <li class="nav-item"><a href="/students" class="nav-link  {{ (request()->is('students')) ? 'active' : '' }}">Help a Student</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Donate
          </a>
          <ul class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="fas fa-laptop"></i> &nbsp;&nbsp; Material</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-money-bill-wave"></i> &nbsp;&nbsp; Cash</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="/courses" class="nav-link  {{ (request()->is('courses')||request()->is('courses/*')) ? 'active' : '' }}">Courses</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link {{ ((request()->is('about'))||(request()->is('contact'))) ? 'active' : '' }} dropdown-toggle" id="bonyenDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Bonyen
          </a>
          <ul class="dropdown-menu shadow-lg" aria-labelledby="bonyenDropdown">
            <li><a class="dropdown-item" href="#"><i class="fab fa-buffer"></i> &nbsp;&nbsp; Activities</a></li>
            <li><a class="dropdown-item {{ (request()->is('about')) ? 'active' : '' }}" href="/about"><i class="fas fa-info-circle"></i> &nbsp;&nbsp; About us</a></li>
            <li><a class="dropdown-item {{ (request()->is('contact')) ? 'active' : '' }}" href="/contact"><i class="fas fa-phone"></i> &nbsp;&nbsp; Contact us</a></li>
          </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">عربي</a></li>
      </ul>
      </div>
  </header>
  <main>
      @yield('content')
  </main>
  <footer class="footer container">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <img src="/img/minilogo.png" width="30"/>
          </a>
          <span class="text-muted">&copy; 2021 <a href="/" class="link-primary">Al Bonyen</a>, Inc</span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><span class="social-icon" style="font-size: 1.5em;"><i class="fab fa-facebook"></i></span></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><span class="social-icon" style="font-size: 1.5em;"><i class="fab fa-linkedin"></i></span></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><span class="social-icon" style="font-size: 1.5em;"><i class="fab fa-youtube"></i></span></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><span class="social-icon" style="font-size: 1.5em;"><i class="fab fa-instagram"></i></span></a></li>
        </ul>
        </div>
    </footer>
    <!-- Scripts -->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/8525c57412.js" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
