@if(Route::currentRouteName() == 'dettaglio')

<div class="container-fluid page-header py-5">
  <div class="container py-5">
      <h1 class="display-3 text-light mb-3 mt-5 animate__animated animate__slideInDown">Servizi</h1>
      <nav aria-label="breadcrumb animate__animated animate__slideInDown">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-light" href="/">Home</a></li>
              <li class="breadcrumb-item"><a class="text-light" href="/servizi">Servizi</a></li>
              <li class="breadcrumb-item text-light active" aria-current="page">{{$name}}</li>
          </ol>
      </nav>
  </div>
</div>

<div class="container-fluid bg-light overflow-hidden px-lg-0 pb-lg-5">
  <div class="container feature px-lg-0 py-5">
      <div class="row g-0 mx-lg-0 py-5 align-items-center">
          <div class="col-lg-6 feature-text animate__animated animate__fadeIn">
              <div class="p-lg-5 ps-lg-0">
                <div class="cg-text mb-3" style="width: 60px; height: 2px;"></div>
                  <h1 class="display-5 mb-5">{{$name}}</h1>
                  <ul>
                    <li>
                      <p><i class="fa-solid fa-arrow-right me-4 text-cg animate__animated animate__fadeIn"></i>
                      {{$description}}</p>
                    </li>
                    <li>
                      <p><i class="fa-solid fa-arrow-right me-4 text-cg animate__animated animate__fadeIn"></i>
                      {{$description2}}</p>
                    </li>
                  </ul>  
              </div>
              <p class="mb-4 pb-2 text-lg-start text-center"><span class="first-letter">C</span>ontattaci per avere maggiori informazioni</p>
              <div class="container">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-4">
                  <a href="{{route('service')}}">
                    <button type="button" class="masthead-btn-dark mb-4">
                      Torna indietro
                    </button>
                  </a>
                </div>
              </div>
          </div>
          <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
              <div class="position-relative h-100">
                  <img class="position-absolute img-fluid w-100" src="{{$img}}" style="object-fit: cover;" alt="">
              </div>
          </div>
      </div>
  </div>
</div>


@else   

<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <div class="service-item  position-relative">
    <div class="icon">
      <img src="{{$icon}}" alt="">
    </div>
    <h3>{{$name}}</h3>
    <p>{{$description}}</p>
    <a href="{{route('service')}}" class="readmore stretched-link">Leggi di più <i class="fa-solid fa-arrow-right-long"></i></a>
  </div>
</div>
@endif