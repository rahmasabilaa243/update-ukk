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

      <!-- SECTION EKSTRAKURIKULER -->
<section class="my-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Ekstrakurikuler</h2>
    
    <div class="row g-4 justify-content-center">
      @foreach($data as $item)
        <div class="col-md-4 col-sm-6">
          <div class="card h-100 shadow-sm">
            <img src="{{ asset($item->foto) }}" class="card-img-top" alt="{{ $item->nama }}"
                 style="height: 250px; object-fit: cover;">
            <div class="card-body d-flex align-items-center justify-content-center">
              <h5 class="card-title text-center mb-0">{{ $item->nama }}</h5>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
<!-- TUTUP SECTION EKSTRAKURIKULER -->
    

       <x-footer/>

    
  </body>
</html>