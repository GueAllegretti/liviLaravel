{{-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top cg-navbar cg-navbar-scroll">
  <div class="container-fluid">
    <a class="navbar-brand tx-style logo-nav" href="{{route('index')}}">
      <img src="/img/logo.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'index') ? 'active nav-color-active' : ''}}" href="{{route('index')}}" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'about') ? 'active nav-color-active' : ''}}" href="{{route('about')}}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'work') ? 'active nav-color-active' : ''}}" href="{{route('work')}}">Lavori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() == 'service') ? 'active nav-color-active' : ''}}" href="{{route('service')}}">Servizi</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}
<header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <img src="/logo.png" alt="">
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="{{(Route::currentRouteName() == 'index') ? 'active' : ''}}" href="{{route('index')}}" href="{{route('index')}}">Home</a></li>
        <li><a class="{{(Route::currentRouteName() == 'about') ? 'active' : ''}}" href="{{route('about')}}">About</a></li>
        <li><a class="{{(Route::currentRouteName() == 'service') ? 'active' : ''}}" href="{{route('service')}}">Services</a></li>
        {{-- <li><a href="projects.html">Projects</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> --}}
        <li><a class="{{(Route::currentRouteName() == 'contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->