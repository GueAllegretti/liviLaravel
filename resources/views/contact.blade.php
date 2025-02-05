<x-layout>

  <x-slot name="title">Contatti</x-slot>

  <div class="breadcrumbs d-flex align-items-center">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Contatti</h2>
      <ol>
        <li><a href="{{route('index')}}">Home</a></li>
        <li>Contatti</li>
      </ol>
    </div>
  </div>

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center align-items-center">
        <div class="col-lg-12">
          <div class="info-item d-flex flex-column justify-content-center align-items-center py-4">
            <i class="bi bi-send-check d-flex align-items-center justify-content-center"></i>
            <p class="mt-4 mx-2 text-center">Per avere informazioni o per un preventivo sui nostri servizi <a href="mailto:info@liviimpianti.it?subject=Richiesta informazioni"><span class="fw-bold text-uppercase text-contact">clicca qui</span></a></p>
          </div>
        </div>

        <div class="row gy-4">
        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48515.46662547169!2d16.454174912198564!3d40.53680213806961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13389d94a70c0707%3A0xb7dba9cd2398330a!2sLIVI%20IMPIANTI%20SRLS!5e0!3m2!1sit!2sit!4v1684356035586!5m2!1sit!2sit" style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
        <div class="col-lg-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center py-4">
            <i class="bi bi-map d-flex align-items-center justify-content-center"></i>
            <h3 class="fs-5 fw-bolder mt-4 mb-2">Indirizzo</h3>
            <p class="mb-0 fw-light text-contact text-center px-3">Zona PIP Contrada Manferrara sn 75016 – Pomarico (MT)</p>
          </div>
       
          <div class="row pt-4 gy-4">
        <div class="col-lg-6 col-md-6">
          <a href="mailto:info@liviimpianti.it?subject=Richiesta informazioni">
            <div class="info-item d-flex flex-column justify-content-center align-items-center py-4">
              <i class="bi bi-envelope d-flex align-items-center justify-content-center"></i>
              <h3 class="fs-5 fw-bolder mt-4 mb-2">Email</h3>
              <p class="mb-0 fw-light text-contact">info@liviimpianti.it</p>
            </div>
          </a>
        </div>

        <div class="col-lg-6 col-md-6">
          <a href="tel:+390835408790">
            <div class="info-item d-flex flex-column justify-content-center align-items-center py-4">
              <i class="bi bi-telephone d-flex align-items-center justify-content-center"></i>
              <h3 class="fs-5 fw-bolder mt-4 mb-2">Telefono</h3>
              <p class="fw-light mb-0 text-contact">0835 408790</p>
            </div>
          </a>
        </div>
      </div>
      </div>
      </div>

    </div>
  </section>
  
</x-layout>