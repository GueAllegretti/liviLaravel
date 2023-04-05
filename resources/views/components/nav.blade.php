{{-- <header id="header" class="header d-flex align-items-center">
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{route('index')}}" class="logo d-flex align-items-center">
      <img src="/logo.png" alt="logo livi impianti">
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="{{(Route::currentRouteName() == 'index') ? 'active' : ''}}" href="{{route('index')}}" href="{{route('index')}}">Home</a></li>
        <li><a class="{{(Route::currentRouteName() == 'about') ? 'active' : ''}}" href="{{route('about')}}">Chi siamo</a></li>
        <li><a class="{{(Route::currentRouteName() == 'service') ? 'active' : ''}}" href="{{route('service')}}">Servizi</a></li>
        <li><a class="{{(Route::currentRouteName() == 'contact') ? 'active' : ''}}" href="{{route('contact')}}">Contatti</a></li>
      </ul>
    </nav>

  </div>
</header> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a href="{{route('index')}}" class="logo d-flex align-items-center mx-4">
    <img src="/logo.png" alt="logo livi impianti">
  </a>
  <button class="navbar-toggler mx-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar collapse navbar-collapse" id="navbarSupportedContent">
    <ul>
      <li><a class="{{(Route::currentRouteName() == 'index') ? 'active' : ''}}" href="{{route('index')}}" href="{{route('index')}}">HOME</a></li>
      <li><a class="{{(Route::currentRouteName() == 'about') ? 'active' : ''}}" href="{{route('about')}}">CHI SIAMO</a></li>
      <li><a class="{{(Route::currentRouteName() == 'service') ? 'active' : ''}}" href="{{route('service')}}">SERVIZI</a></li>
      <li><a class="{{(Route::currentRouteName() == 'contact') ? 'active' : ''}}" href="{{route('contact')}}">CONTATTI</a></li>
    </ul>
  </div>
</nav>