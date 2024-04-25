<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk Kami</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
  <style>
    .jere{
        cursor: pointer;
    }
    .card {
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
    }
  </style>

<body>
    <!-- navbar -->
<?php
require 'component/navbar.php';
?>

  <!-- Product Section -->
  <section class="container mt-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Produk / Jasa Perusahaan</h2>
        <p>kami menjual barang berkualitas dan barang import keren.</p>
        <h3>Produk Kami</h3>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="image/4.jpg" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">mio</h5>
                <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                <p class="card-text"><small class="text-muted">Kategori: Kategori Produk 1</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="image/2.jpg" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">fyou</h5>
                <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                <p class="card-text"><small class="text-muted">Kategori: Kategori Produk 2</small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="image/gambar 1.jpeg" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">cbr</h5>
                <p class="card-text">Deskripsi singkat tentang produk ini.</p>
                <p class="card-text"><small class="text-muted">Kategori: Kategori Produk 2</small></p>
              </div>
            </div>
          </div>
        </div>
        <!-- You can add more product cards here -->
    </div>
</div>
</section>
<!-- End Product Section -->

<h2 style="text-align: center;">produk lainnya</h2>
<div class="container mt-5">
    <div class="jere">
<div class="row" style="max-height: 100%;
    height: 100%;">
  <div class="col">
    <div class="card" style="width: 18rem; max-height: 100%;
    height: 100%;">
      <img src="image/5.jpg" class="card-img-top" alt="baju">
      <div class="card-body">
        <p class="card-text">Tampil beda dengan gaya yang menegaskan kekuatan dan ketangguhan. Seragam hitam kami adalah manifestasi dari semangat kebersamaan dan dedikasi dalam klub motor kami.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;max-height: 100%;
    height: 100%;">
      <img src="image/7.jpg" class="card-img-top" alt="baju2">
      <div class="card-body">
        <p class="card-text">Tampil beda dengan gaya yang menegaskan kekuatan dan ketangguhan. Seragam merah kami adalah manifestasi dari semangat kebersamaan dan dedikasi dalam klub motor kami.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 18rem;max-height: 100%;
    height: 100%;">
      <img src="image/8.jpg" class="card-img-top" alt="helm">
      <div class="card-body">
        <p class="card-text">Baju pelindung, helm hitam kami, simbol dari keamanan yang tak tergoyahkan di jalanan. Bergabunglah dengan kami dan rasakan kebebasan berkendara dengan perlindungan yang tak tertandingi</p>
      </div>
    </div>
  </div>
  </div>
</div></div>

<!-- footer -->
<?php
require 'component/footer.php';
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
