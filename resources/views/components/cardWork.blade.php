@if(Route::currentRouteName() == 'progetto')

<div class="container-fluid page-header py-5">
  <div class="container py-5">
      <h1 class="display-3 text-light mb-3 mt-5 wow animate__animated animate__slideInDown">Lavori</h1>
      <nav aria-label="breadcrumb animate__animated animate__slideInDown">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-light" href="/">Home</a></li>
              <li class="breadcrumb-item"><a class="text-light" href="/work">Lavori</a></li>
              <li class="breadcrumb-item text-light active" aria-current="page">Lavoro: {{$where}}</li>
          </ol>
      </nav>
  </div>
</div>

<div class="container-fluid bg-light overflow-hidden px-lg-0 pb-lg-5">
  <div class="container feature px-lg-0 py-5">
      <div class="row g-0 mx-lg-0 py-5 align-items-center">
          <div class="col-lg-6 feature-text">
              <div class="p-lg-5 ps-lg-0  wow animate__animated animate__slideInDown" data-wow-delay="0.1s">
                <div class="cg-text mb-3" style="width: 60px; height: 2px;"></div>
                  <h3 class="fw-light mb-5">{{$category}}</h3>
                  <h2 class="mb-5 text-center">{{$where}}</h2>
                  <h5 class="mb-3 fw-light">Interventi effettuati:</h5>
                  <ul>
                    <li>
                      <p><i class="fa-solid fa-arrow-right me-4 text-cg wow animate__animated animate__slideInDown" data-wow-delay="0.3s"></i>
                      {{$description}}</p>
                    </li>
                    <li>
                      <p><i class="fa-solid fa-arrow-right me-4 text-cg wow animate__animated animate__slideInDown" data-wow-delay="0.3s"></i>
                      {{$description2}}</p>
                    </li>
                  </ul>  
              </div>
              <p class="mb-4 pb-2 text-lg-start text-center"><span class="first-letter">C</span>ontattaci per avere un preventivo gratuito</p>
              <div class="container">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end me-4">
                  <a href="{{route('work')}}">
                    <button type="button" class="masthead-btn-dark mb-4">
                      Torna indietro
                    </button>
                  </a>
                </div>
              </div>
          </div>
          <div class="col-lg-6 pe-lg-5">
            <div id="carouselExampleIndicators" class="carousel slide wow animate__animated animate__slideInDown" data-wow-delay="0.4s" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{$img}}" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="{{$alt}}">
                </div>
                <div class="carousel-item">
                  <img src="{{$img1}}" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="{{$alt}}">
                </div>
                <div class="carousel-item">
                  <img src="{{$img2}}" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="{{$alt}}">
                </div>
                <div class="carousel-item">
                  <img src="{{$img3}}" class="d-block w-100" style="object-fit: cover; height: 500px;" alt="{{$alt}}">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            </div>
          </div>
      </div>
  </div>
</div>


@else   

<div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
  <div class="portfolio-content h-100">
    <img src={{$img}} class="img-fluid" alt={{$alt}}>
    <div class="portfolio-info">
      <p>{{$title}}</p>
      <a href={{$img}} target="_blank" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link text-center"><i class="bi bi-zoom-in"></i></a>
    </div>
  </div>
</div>

@endif