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
      <!-- SECTION TENTANG SAYA -->
<section class="my-3">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">About Me</h2>
     <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
       
            <div class="card shadow-lg">
                <div class="card-body text-center">
             
                    <img src="ftsy.jpeg" alt="Foto Rahma Sabila" class="rounded-circle mb-3" width="150" height="150">
                    <h3 class="card-title">Biodata Saya</h3>

                 
                   <div class="bio-section text-start">
    <ul class="list-unstyled">
        <table>
            <tr>
            <td>
                <th>Nama</th>
                <td>:Rahma Sabila</td>
            </td>
        </tr>
        <tr>
            <td>
                <th>Tempat, Tanggal Lahir</th>
                <td>:Tasikmalaya, 15 Agustus 2007</td>
            </td>
        </tr>
        <tr>
            <td>
                <th>Alamat</th>
                <td>:Kp.Pasirjaya, Kel.Sukajaya, Kec.Purbaratu</td>
            </td>
        </tr>
        <tr>
            <td>
                <th>Email</th>
                <td>: rahmasabilaa243@gmail.com</td>
            </td>
        </tr>
        <tr>
            <td>
                <th>Telepon</th>
                <td>:085702670228</td>
            </td>
        </tr>
        </table>
    </ul>
</div>

                    
                   
                </div>
            </div>
        </div>
    </div>
</div>


    
</section>
<!-- TUTUP  -->

  

    <x-footer/>

  </body>
</html>