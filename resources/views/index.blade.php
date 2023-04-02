@section('meta_keywords','elettricista matera, assistenza, manutenzione, impianti elettrici, impianti allarme, impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC, antintrusione, impianti fotovoltaici, assistenza, impianti antincendio, cablaggio strutturato, manutenzione di impianti esistenti, impianti domotici')
@section('meta_description', 'Azienda con sede a Matera, professionisti in impianti elettrici, illuminotecnici e domotici. Installazione di impianti antincendio e videosorveglianza, pannelli fotovoltaici, automazioni civili e industriali')

<x-layout>
  <x-slot name="title">Livi Impianti</x-slot>

<!-- Banner start-->
<section id="hero" class="hero">

  <div class="info mast-head d-flex align-items-center">
    <div class="container vh-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Livi 
          <br>
          <span>Impianti</span></h2>
          <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a data-aos="fade-up" data-aos-delay="200" href="#services" class="btn-get-started">Scopri di più</a>
        </div>
      </div>
    </div>
  </div>

  {{-- <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active" style="background-image: url(/img/mast-head.jpg)"></div>
    <div class="carousel-item" style="background-image: url(/img/mast-head.jpg)"></div>
    <div class="carousel-item" style="background-image: url(/img/mast-head.jpg)"></div>
    <div class="carousel-item" style="background-image: url(/img/mast-head.jpg)"></div>
    <div class="carousel-item" style="background-image: url(/img/mast-head.jpg)"></div>

    <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div> --}}

</section>
<!-- Banner end-->


  {{-- <!-- categorie cg -->
<section class="cg-bg-primary pt-5 pb-5" id="Categories"> 
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-12 text-center">
        <div class="cg-text mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
        <h2 class="display-5 mb-3">SERVIZI</h2>
        <p>
          Qualunque siano le tue esigenze, grazie alla nostra prepazione e competenza, 
          <br>
          siamo in grado di realizzare il tuo progetto in ogni sua parte.
        </p>
      </div>
    </div>
    <div class="row mb-5">
      <div id="firstWrapperCategories" class="col-12 col-lg-4">
        
      </div>
      <div id="secondWrapperCategories" class="col-12 col-lg-4">
        
      </div>
      <div id="thirdWrapperCategories" class="col-12 col-lg-4">
        
      </div>
    </div>
  </div>
</section> --}}

<!-- Services Start -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Servizi</h2>
      <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
    </div>

    <div class="row gy-4">
      
      @foreach($services as $service)

      <x-card
        id="{{$service['id']}}"
        name="{{$service['name']}}"
        icon="{{$service['icon']}}"
      />
      @endforeach

    </div>

  </div>
</section><!-- End Services Section -->
<!-- Services Start -->
  

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <h2>Our Projects</h2>
              <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
            </div>
  
              <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Remodeling 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="https://via.placeholder.com/600x400" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                  <div class="portfolio-content h-100">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Construction 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="https://via.placeholder.com/600x400" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                  <div class="portfolio-content h-100">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Repairs 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="https://via.placeholder.com/600x400" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                  <div class="portfolio-content h-100">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Design 1</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="https://via.placeholder.com/600x400" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                  <div class="portfolio-content h-100">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Remodeling 2</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="https://via.placeholder.com/600x400" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
                <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                  <div class="portfolio-content h-100">
                    <img src="https://via.placeholder.com/600x400" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <h4>Construction 2</h4>
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="https://via.placeholder.com/600x400" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->
    
              <!-- End Projects Container -->
    
            </div>
    
          </div>
        </section><!-- End Our Projects Section -->
{{-- <!-- Feature Start -->
<div class="container d-none d-lg-block cg-bg-primary-light overflow-hidden my-5 px-lg-0 d-none d-lg-block">
  <div class="container feature px-lg-0">
      <div class="row g-0 mx-lg-0">
        <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
          <div class="position-relative h-100">
              <img class="position-absolute img-fluid w-100 h-100 p-5" src="img/feature.jpg" style="object-fit: cover;" alt="progettazione">
          </div>
        </div>
          <div class="col-lg-6 feature-text py-5">
              <div class="p-lg-5 ps-lg-0">
                  <div class="cg-text mb-3" style="width: 60px; height: 2px;"></div>
                  <h1 class="display-5 mb-5">Perchè scegliere noi</h1>
                  <p class="mb-4 pb-2">Seguiamo i nostri clienti dalla fase di progettazione fino alla realizzazione degli impianti. 
                  <br>  
                  Utiliziamo solo prodotti di alta qualità destinati a durare nel tempo. </p>
                  <a href="{{route('service')}}"><button class="masthead-btn-dark">Scopri di più</button></a>
              </div>
          </div>
      </div>
  </div>
</div>
  <!-- Feature End -->

  <!-- section contatti -->
<section id="contatti">
  <div class="container-xxl py-5">
    <div class="container text-lg-start text-center">
        <div class="row g-4">
            <div class="col-md-6 col-lg-6">
                <div class="h-100 p-4 p-xl-5 cg-bg-primary">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <i class="fa-solid fa-location-dot fa-3x cg-icone-secondary"></i>
                    </div>
                    <h5 class="text-white">CONTATTACI</h5>
                    <hr class="w-25 mx-auto">
                  <span>Contattaci per preventivo, sopralluogo, progettazione e assistenza</span>
                    <div class="row g-4 mb-2 pb-2 mt-2">
                      <div class="col-sm-6">
                          <div class="d-flex align-items-center justify-content-center">
                              <div>
                                  <a href="tel:+393801814128" class="fw-medium mb-0 link-cg"><i class="fa-solid fa-phone me-0 fa-2x me-xl-2 mb-3 mb-xl-0 me-2 cg-icone-secondary"></i>+39 3801814128</a>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="d-flex align-items-center justify-content-center">
                              <div>
                                <a href="mailto:info@cgimpiantielettrici.it?subject=Richiesta informazioni" class="fw-medium mb-0 link-cg"><i class="fa-regular fa-envelope fa-2x me-0 me-xl-2 mb-3 mb-xl-0 me-2 cg-icone-secondary"></i>info@cgimpiantielettrici.it</a>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="container-fluid">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.451471165273!2d16.57916881509729!3d40.68605354713998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13477f310b1a61c3%3A0x69588aed6f7fa828!2sCasamassima%20Giovanni%20Impianti%20Elettrici!5e0!3m2!1sit!2sit!4v1665084147207!5m2!1sit!2sit" width="100%" height="355" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

 <!-- annunci importati cg -->
 <section class="section-glide cg-bg-primary-light py-5">
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-12">
        <div class="">
          <div class="cg-text mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
          <h2 class="display-5 mb-3">I NOSTRI LAVORI</h2>
        </div>
      </div>
      <div class="col-12">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
             
            </ul>
            <div class="glide__arrows" data-glide-el="controls">
              <button class="glide__arrow glide__arrow--left cg-glide-control" data-glide-dir="<"><i class="fas fa-chevron-left fa-2x"></i></button>
              <button class="glide__arrow glide__arrow--right cg-glide-control" data-glide-dir=">"><i class="fas fa-chevron-right fa-2x"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

  </x-layout>