<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak Kami</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/style.css">
  
<!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

</head>
<body>
   <!-- navbar  -->
   <?php
require 'component/navbar.php';
?>
<!-- end nyaa sidde barr -->

  <!-- Contact Section -->
  <section class="container mt-5">
    <div class="row">
      <div class="col-lg-6">
        <h2>Kontak Kami</h2>
        <p>Silakan hubungi kami melalui informasi kontak di bawah ini:</p>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt me-2"></i>Laguboti, Toba Samosir, Indonesia</li>
          <li><i class="fas fa-phone-alt me-2"></i>+62823-6204-6037</li>
          <li><i class="fas fa-fax me-2"></i>+62832-3242-0332</li>
          <li><i class="fas fa-envelope me-2"></i>syahrialsinaga@gmail.com</li>
        </ul>
      </div>
      <div class="col-lg-6">
      <hr class="divider"> 


        <h2>Form Kontak</h2>
        <form id="contactForm">
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda" required>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="5" placeholder="Masukkan pesan Anda" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Bootstrap Bundle with Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('#contactForm').submit(function(e){
      e.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var message = $('#pesan').val();

      // Validasi
      if(name == '' || email == '' || message == '') {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Harap lengkapi semua field!',
        });
        return;
      }

      // Kirim pesan dan tampilkan notifikasi
      Swal.fire({
        icon: 'success',
        title: 'Pesan berhasil terkirim!',
        showConfirmButton: false,
        timer: 1500
      });
      $('#name').val('');
      $('#email').val('');
      $('#pesan').val('');
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
