<x-layout>
  <x-slot name="title">Chi siamo</x-slot>

    <div class="breadcrumbs d-flex align-items-center">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>L'azienda</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Chi Siamo</li>
        </ol>
      </div>
    </div>
  
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row position-relative">
          <div class="col-lg-7 about-img">
          <img src="https://ik.imagekit.io/reko7evs1/azienda.jpg?updatedAt=1685738282140" class="img-fluid" alt="azienda">
          {{-- <img src="/img/azienda.jpg" class="img-fluid w-75" alt="azienda"> --}}
        </div>
          <div class="col-lg-7">
            <h2>Chi Siamo</h2>
            <div class="our-story">
              <p>LIVI IMPIANTI è un'azienda giovane e dinamica, operiamo a 360° nell’ambito dell’impiantistica elettrica al fine di poter soddisfare ogni esigenza. Nello specifico ci occupiamo di:
                </p>
              <ul>
                <li class="py-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione impianti elettrici civili ed industriali;</li>
                <li class="py-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione di impianti elettrici domotici;</li>
                <li class="py-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione di impianti fotovoltaici ed eolici;</li>
                <li class="py-2"><i class="bi bi-check-circle fs-5 me-3"></i> Realizzazione impianti a fibre ottiche;</li>
                <li class="py-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione di impianti antintrusione e videosorveglianza;</li>
                <li><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione e costruzioni di reti LAN;</li>
              </ul>  
              <div class="watch-video d-flex align-items-center justify-content-end position-relative pb-3">
                <i class="bi bi-play-circle fs-3"></i>
                <a href="https://www.facebook.com/liviimpianti/videos/3248417628611712" class="glightbox fw-bolder ms-2" target="_blank">Guarda Video</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section id="certifications" class="certifications section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">

          @foreach($certifications as $certification)
          <x-cardCertifications
            id="{{$certification['id']}}"
            img="{{$certification['img']}}"
          />
          @endforeach

        </div>

      </div>
    </section>
  
    </main>

</x-layout>