@extends('dashboard.layouts.main')

@section('container')
  <main class="konten">
    <body class="is-boxed has-animations">
      <div class="body-wrap boxed-container">
  
  
          <main>
              <section class="hero">
                  <div class="container">
                      <div class="hero-inner">
              <div class="hero-copy">
                            <h1 class="hero-title mt-0">
                              Lakukan Pengajuan Studi Lanjut
                            </h1>
                            <p class="hero-paragraph">
                              Silahkan Mengisi Form Sesuai Dengan Data yang Benar
                            </p>
                            <div class="hero-cta">
                  <!-- <a class="button button-primary" href="#">Buy it now</a> -->
                  <div class="lights-toggle">
                    <input id="lights-toggle" type="checkbox" name="lights-toggle" class="switch" checked="checked">
                    <label for="lights-toggle" class="text-xs"><span>Turn me <span class="label-text">dark</span></span></label>
                  </div>
                </div>
              </div>
              <div class="hero-media">
                <div class="header-illustration">
                  <img class="header-illustration-image asset-light" src="{{ asset('dist/images/header-illustration-light.svg') }}" alt="Header illustration">
                  <img class="header-illustration-image asset-dark" src="{{ asset('dist/images/header-illustration-dark.svg') }}" alt="Header illustration">
                </div>
                <div class="hero-media-illustration">
                    <img class="hero-media-illustration-image asset-light" src="{{ asset('dist/images/hero-media-illustration-light.svg') }}" alt="Hero media illustration">
                    <img class="hero-media-illustration-image asset-dark" src="{{ asset('dist/images/hero-media-illustration-dark.svg') }}" alt="Hero media illustration">
                </div>
                <div class="hero-media-container">
                  <img class="hero-media-image asset-light" src="{{ asset('dist/images/hero-media-light.svg') }}" alt="Hero media">
                  <img class="hero-media-image asset-dark" src="{{ asset('dist/images/hero-media-dark.svg') }}" alt="Hero media">
                </div>
              </div>
                      </div>
                  </div>
              </section>
  
              <section class="features section">
                  <div class="container">
            <div class="features-inner section-inner has-bottom-divider">
              <div class="features-header text-center">
                <div class="container-sm">
                  <h2 class="section-title mt-0"> Informasi </h2>
                                <p class="section-paragraph">
                                  Web ini dibuat bagi ASN untuk melakukan pengajuan Studi Lanjut

                                </p>
                  <div class="features-image">
                    <img class="features-illustration asset-dark" src="{{ asset('dist/images/features-illustration-dark.svg') }}" alt="Feature illustration">
                    <img class="features-box asset-dark" src="{{ asset('dist/images/features-box-dark.svg') }}" alt="Feature box">
                    <img class="features-illustration asset-dark" src="{{ asset('dist/images/features-illustration-top-dark.svg') }}" alt="Feature illustration top">
                    <img class="features-illustration asset-light" src="{{ asset('dist/images/features-illustration-light.svg') }}" alt="Feature illustration">
                    <img class="features-box asset-light" src="{{ asset('dist/images/features-box-light.svg') }}" alt="Feature box">
                    <img class="features-illustration asset-light" src="{{ asset('dist/images/features-illustration-top-light.svg') }}" alt="Feature illustration top">
                  </div>
                </div>
                          </div>
                          <div class="features-wrap">
                              <div class="feature is-revealing">
                                  <div class="feature-inner">
                                      <div class="feature-icon">
                      <img class="asset-light" src="{{ asset('dist/images/feature-01-light.svg') }}" alt="Feature 01">
                      <img class="asset-dark" src="{{ asset('dist/images/feature-01-dark.svg') }}" alt="Feature 01">
                                      </div>
                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">About</h3>
                                        <p class="text-sm mb-0">
                                          Kabupaten Minahasa adalah salah satu kabupaten yang berada 
                                          di Provinsi Sulawesi Utara, Indonesia.
                                          Ibukota kabupaten ini terletak dikota Tondano dengan luas 
                                          wilaya kabupaten 1.025,85 KM²
                                        </p>
                    </div>
                  </div>
                              </div>
                <div class="feature is-revealing">
                                  <div class="feature-inner">
                                      <div class="feature-icon">
                      <img class="asset-light" src="{{ asset('dist/images/feature-02-light.svg') }}" alt="Feature 02">
                      <img class="asset-dark" src="{{ asset('dist/images/feature-02-dark.svg') }}" alt="Feature 02">
                                      </div>
                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Motto</h3>
                                        <p class="text-sm mb-0">
                                        I Jayat U Santi

                                        </p>
                    </div>
                  </div>
                              </div>
                <div class="feature is-revealing">
                                  <div class="feature-inner">
                                      <div class="feature-icon">
                      <img class="asset-light" src="{{ asset('dist/images/feature-03-light.svg') }}" alt="Feature 03">
                      <img class="asset-dark" src="{{ asset('dist/images/feature-03-dark.svg') }}" alt="Feature 03">
                                      </div>
                    <div class="feature-content">
                                        <h3 class="feature-title mt-0">Contact</h3>
                                        <p class="text-sm mb-0">
                                          Email : Gracedina@gmail.com
                                        </p>
                    </div>
                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
  
        <section class="cta section">
                  <div class="container-sm">
                      <div class="cta-inner section-inner">
                          <div class="cta-header text-center">
                              <h2 class="section-title mt-0"> Desain by </h2>
                              <p class="section-paragraph">
                                Gracedina Marlin Langi
                              </p>
                <div class="cta-cta">
                  <!-- <a class="button button-primary" href="#">Buy it now</a> -->
                </div>
                </div>
                      </div>
                  </div>
              </section>
          </main>
  
      </div>
  
      <script src="{{ asset('js/main.min.js') }}"></script>
    </body>
  </main>
@endsection