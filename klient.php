<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Klien</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Custom CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      max-width: 800px;
      margin: 50px auto;
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #1a73e8;
    }
    .client-list {
      list-style: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }
    .client-list li {
      margin: 15px;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }
    .client-list li img {
      width: 150px;
      height: auto;
      filter: grayscale(100%);
      transition: filter 0.5s ease-in-out;
    }
    .client-list li:hover img {
      filter: grayscale(0%);
    }
    .fade-in {
      opacity: 1;
    }
  </style>
</head>
<body>
<?php
require 'component/navbar.php';
?>
  <div class="container">
    <h1>Daftar Klien</h1>
    <ul class="client-list">
      <li class="fade-in"><img src="image/klien.webp" alt="Client 1"></li>
      <li class="fade-in"><img src="image/klient2.webp" alt="Client 2"></li>
      <li class="fade-in"><img src="image/03.jpg" alt="Client 3"></li>
      <li class="fade-in"><img src="image/04.jpg" alt="Client 4"></li>
      <li class="fade-in"><img src="image/05.webp" alt="Client 5"></li>
      <li class="fade-in"><img src="image/07.webp" alt="Client 6"></li>
      <li class="fade-in"><img src="image/dodo.jpg" alt="Client 7"></li>
      <li class="fade-in"><img src="image/kor.jpg" alt="Client 8"></li>
      <li class="fade-in"><img src="image/rea.jpg" alt="Client 9"></li>
      <li class="fade-in"><img src="image/de.jpg" alt="Client 10"></li>
      <li class="fade-in"><img src="image/jojo.jpg" alt="Client 10"></li>
      <li class="fade-in"><img src="image/99.jpg" alt="Client 10"></li>
      <!-- Tambahkan lebih banyak klien di sini -->
    </ul>
  </div>


  <!-- Bootstrap Bundle with Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    // Fungsi untuk menampilkan efek fade-in saat menggulir
    function fadeInOnScroll() {
      var elements = $('.fade-in');
      elements.each(function () {
        if (isElementInViewport(this)) {
          $(this).css('opacity', '1');
        }
      });
    }

    // Fungsi untuk mengecek apakah elemen berada dalam viewport
    function isElementInViewport(el) {
      var rect = el.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    }

    // Event listener untuk menjalankan efek fade-in saat menggulir
    $(window).on('scroll', function () {
      fadeInOnScroll();
    });

    // Jalankan efek fade-in pada saat halaman pertama kali dimuat
    $(document).ready(function () {
      fadeInOnScroll();
    });
  </script>
</body>
</html>
