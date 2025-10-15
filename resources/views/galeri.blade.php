<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bs.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>Website Resmi SMKN 4 Tasikmalaya</title>
  </head>
  <body>

  <x-header/>
  <style>
    body {
    font-family: 'Poppins', sans-serif;
    }
    h1, h2, h3, p, .card-title, .card-text {
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
    </style>

       
       <!-- SECTION GALERI -->
<div class="container my-5">
  <h2 class="text-center mb-5 fw-bold">Galeri</h2>

  <div class="d-flex flex-wrap justify-content-center gap-3">
    @foreach($data as $item)
      <div style="width: 18%;">
        <div class="card h-100">
          <img 
            src="{{ asset($item->foto) }}" 
            class="card-img-top rounded-3" 
            alt="foto" 
            style="object-fit: cover; height: 300px; width: 100%;">
        </div>
      </div>
    @endforeach
  </div>
</div>
<!-- TUTUP SECTION GALERI -->



      <x-footer/>

    
  </body>
</html>