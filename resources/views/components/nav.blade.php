<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black">
  <a class="navbar-brand logo mx-3 me-5" href="#">
    <img src="/logo.png" alt="logo livi impianti">
  </a>
  <button class="navbar-toggler mx-3" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav text-center">
      <li class="nav-item active">
        <a class="nav-link {{(Route::currentRouteName() == 'index') ? 'active' : ''}}" href="{{route('index')}}" href="{{route('index')}}">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() == 'about') ? 'active' : ''}}" href="{{route('about')}}">CHI SIAMO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() == 'service') ? 'active' : ''}}" href="{{route('service')}}">SERVIZI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{(Route::currentRouteName() == 'contact') ? 'active' : ''}}" href="{{route('contact')}}">CONTATTI</a>
      </li>
    </ul>
  </div>
</nav>