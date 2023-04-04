<x-layout>


  <x-slot name="title">Contatti</x-slot>

  <div class="breadcrumbs d-flex align-items-center">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
      <h2>Contact</h2>
      <ol>
        <li><a href="{{route('index')}}">Home</a></li>
        <li>Contact</li>
      </ol>
    </div>
  </div>

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">
        <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.237806456884!2d16.493522729160787!3d40.536334990247816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13389d94a70c0707%3A0xb7dba9cd2398330a!2sLIVI%20IMPIANTI%20SRLS!5e0!3m2!1sit!2sit!4v1680618073962!5m2!1sit!2sit" style="border:0; width: 100%; height: 384px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
        </div><!-- End Google Maps -->
        <div class="col-lg-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-map"></i>
            <h3>Indirizzo</h3>
            <p>Via SS. Annunziata, 6 Pomarico (Mt)</p>
          </div>
       
          <div class="row pt-4 gy-4">
        <div class="col-lg-6 col-md-6">
          <div class="info-item d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="info-item  d-flex flex-column justify-content-center align-items-center">
            <i class="bi bi-telephone"></i>
            <h3>Telefono</h3>
            <p>0835 551916/320 4760402</p></p>
          </div>
        </div>
      </div>
      </div>
      </div>

    </div>
  </section>
  
</x-layout>