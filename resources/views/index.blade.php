@section('meta_keywords','elettricista matera, assistenza, manutenzione, impianti elettrici, impianti allarme, impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC, antintrusione, impianti fotovoltaici, assistenza, impianti antincendio, cablaggio strutturato, manutenzione di impianti esistenti, impianti domotici')
@section('meta_description', 'Azienda con sede a Matera, professionisti in impianti elettrici, illuminotecnici e domotici. Installazione di impianti antincendio e videosorveglianza, pannelli fotovoltaici, automazioni civili e industriali')

<x-layout>
  <x-slot name="title">Livi Impianti</x-slot>

<!-- Banner start-->
<section id="livi" class="livi">

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

</section>
<!-- Banner end-->

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
        description="{{$service['description']}}"
      />
      @endforeach

    </div>

  </div>
</section>
<!-- Services Start -->
  

<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>I progetti</h2>
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
</section>

</x-layout>