@extends('home.main')

@section('container')
  <section class="wrapper">
    <div class="container" id="Home">
      <div class="grid-cols-2">
        <div class="grid-item-1">
          <h1 class="main-heading">
            Selamat Datang di Layanan Pengajuan Studi Lanjut, <span>BPK2MB</span>
            <br />
            Kabupaten Minahasa
          </h1>
          <p class="info-text">
            <!-- Bisa isi teks disini -->
          </p>

          <div class="btn_wrapper">

            <!-- <button class="btn documentation_btn">documentation</button> -->
          </div>
        </div>
        <div class="grid-item-2">
          <div class="team_img_wrapper">
            <img src="{{ asset('svg/team.svg')}}" alt="team-img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper">
    <div class="container" data-aos="fade-up" data-aos-duration="1000" id="About">
      <div class="grid-cols-3">
        <div class="grid-col-item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <div class="featured_info">
            <span> Visi dan Misi </span>
            <p>
              <span> Visi : </span>
              “Minahasa Maju Dalam Ekonomi Dan Budaya, Berdaulat, Adil, Dan Sejahtera” <br> <br>
              <span> Misi : </span>
              1. Meningkatkan Pembangunan Sumberdaya Manusia Yang Berbudaya Dan Berdaya Saing; <br>
              2. Mewujudkan Kemandirian Ekonomi Dengan Mendorong Sektor Pertanian, Perikanan Dan Pariwisata; <br>
              3. Mewujudkan Pengembangan Kewilayahan Dengan Prinsip Pembangunan Berkelanjutan; dan <br>
              4. Meningkatkan Pemerataan Kesejahteraan Masyarakat Yang Berkeadilan <br>
              5. Memantapkan Manajemen Birokrasi Yang Profesional Melalui Tata Kelola Pemerintahan Yang Baik <br>

            </p>
          </div>
        </div>
        <div class="grid-col-item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
            </svg>
          </div>
          <div class="featured_info">
            <span> NAWACITA R3D </span>
            <p>
            1. Menghadirkan pemerintah yang melindungi segenap masyarakat minahasa, memberikan rasa aman dilandasi kepentingan efektif, demokratis dan berbangsa dan bernegara <br>
            2. Membuat pemerintah tidak absen dalam membangun tata kelola pemerintahan yang bersih, dan terpercaya <br>
            3. Membangun minahasa dari pinggiran dengan memperkuat daerah perdesaan minahasa <br>
            4. Memperkuat kemandirian ekonomi masyarakat minahasa melalui percepatan pembangunan sektor pertanian, perikanan dan pariwisata <br>
            5. Meningkatkan kualitas hidup masyarakat kabupaten minahasa yang sehat, cerdas, terdidik dengan karakter kepribadian yang berdaya saing <br>
            6. Meningkatkan produktifitas rakyat sehingga minahasa bisa maju dan sejahtera <br>
            7. Membentuk karakter masyarakat minahasa, dengan memperkuat semangat mapalus dan sitou timou tumou tou <br>
            8. Memperteguh kebhinekaan dan memperkuat restorasi sosial dengan menciptakan ruang dialog atar warga <br>
            9. Memastikan terselenggaranya pembangunan berkelanjutan yang berwawasan lingkungan <br>
            </p>
          </div>
        </div>

        <div class="grid-col-item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </div>
          <div class="featured_info">
            <span> Sejarah Minahasa </span>
            <p>
            Kabupaten Minahasa merupakan salah satu 
            Kabupaten dari 15 Kabupaten/Kota dalam wilayah Provinsi Sulawesi Utara 
            yang terdiri dari 25 Kecamatan, 227 Desa dan 43 Kelurahan.
            <br>
            Kabupaten Minahasa merupakan salah satu 
            kabupaten tertua yang ada di Provinsi Sulawesi Utara yang beribukotakan Tondano. 
            Jauh sebelumnya Minahasa dikenal dengan nama MALESUNG, 
            dan kata Minahasa berasal dari kata MINAESA, MAHASA, MINHASA yang berarti menjadi satu. 
            Kata ” Minahasa” ini merujuk dari musyawarah – musyawarah tertinggi di Minahasa 
            dulu dalam rangka menyelesaikan perselisihan atau konflik antar mereka, 
            membagi batas – batas wilayah sub etnik, dan membicarakan persatuan menghadapi musuh dari luar.  
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer></footer>
@endsection

