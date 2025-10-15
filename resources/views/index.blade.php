<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Website Resmi SMKN 4 Tasikmalaya</title>

    <link rel="stylesheet" href="css/bs.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet" />

    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      h2 {
        font-weight: 600;
        color: #2c3e50;
        font-size: 1.6rem;
      }
      p {
        font-size: 0.95rem;
        line-height: 1.6;
        text-align: justify;
      }
      .card-title {
        font-size: 1.1rem;
        font-weight: 600;
      }
      .card-text {
        font-size: 0.9rem;
      }
      /* Optional: margin top-bottom for sections */
      section {
        margin-top: 3rem;
        margin-bottom: 3rem;
      }
    </style>
  </head>
  <body>

    <x-header/>

    

      <!-- SECTION BERITA -->
      <section>
        <h2 class="text-center">Berita</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="berita/berita.webp" class="card-img-top" alt="Berita 1" />
              <div class="card-body">
                <h3 class="card-title">320 Pesilat Perisai Diri Ikuti UKT Periode 72 di SMKN 4 Tasikmalaya</h3>
                <a href="https://kabarpriangan.pikiran-rakyat.com/kabar-priangan/pr-1488326544/320-pesilat-perisai-diri-ikuti-ukt-periode-72-di-smkn-4-tasikmalaya-penerimaan-anggota-baru-dibuka" class="btn btn-info" target="_blank" rel="noopener">Baca selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="berita/berita2.webp" class="card-img-top" alt="Berita 2" />
              <div class="card-body">
                <h3 class="card-title">AHM Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya</h3>
                <a href="#" class="btn btn-info">Baca selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="berita/berita3.jpg" class="card-img-top" alt="Berita 3" />
              <div class="card-body">
                <h3 class="card-title">SMKN 4 Tasikmalaya Gelar JobFair harap mengurangi pengangguran</h3>
                <a href="#" class="btn btn-info">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION BERITA -->

      <!-- SECTION GALERI -->
      <section>
        <h2 class="text-center">Galeri</h2>
        <div class="row">
          <div class="col-6 col-md-3 mb-4">
            <div class="card">
              <img src="foto/foto1.jpg" class="card-img-top" alt="Foto 1" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="card">
              <img src="foto/foto2.jpg" class="card-img-top" alt="Foto 2" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="card">
              <img src="foto/foto3.jpg" class="card-img-top" alt="Foto 3" />
            </div>
          </div>
          <div class="col-6 col-md-3 mb-4">
            <div class="card">
              <img src="foto/foto1.jpg" class="card-img-top" alt="Foto 4" />
            </div>
          </div>
        </div>
      </section>
      <!-- END SECTION GALERI -->

      <!-- SECTION STATISTIK -->
      <section>
        <h2 class="text-center">Data Statistik</h2>
        <div class="row text-center">
          <div class="col-6 col-md-3 mb-3">
            <div class="card bg-secondary text-white">
              <div class="card-body">
                <h3>100</h3>
                Guru
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="card bg-secondary text-white">
              <div class="card-body">
                <h3>1479</h3>
                Siswa
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="card bg-secondary text-white">
              <div class="card-body">
                <h3>45</h3>
                Rombel
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3 mb-3">
            <div class="card bg-secondary text-white">
              <div class="card-body">
                <h3>5</h3>
                Jurusan
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--TUTUP STATISTIK -->

  

    <x-footer/>

  </body>
</html>