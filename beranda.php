<?php
// Mulai session
session_start();

// Periksa apakah pengguna sudah login atau belum
if (!isset($_SESSION['id_user'])) {
    // Jika belum login, arahkan ke halaman login
    header("Location: login.php");
    exit;
}

// Jika sudah login, ambil data pengguna dari session atau database sesuai kebutuhan
$id_user = $_SESSION['id_user']; // Anda mungkin perlu mengambil data dari database sesuai dengan id pengguna yang tersimpan dalam session

// Di sini Anda dapat menambahkan logika atau tampilan halaman beranda sesuai dengan kebutuhan aplikasi Anda
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>prushaan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  </head>
  <body>
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="image/logo.png" alt="Logo" width="80" height="50" class="d-inline-block align-text-top">
      
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="beranda.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visi.php">visi dan misi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">produk kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">kontak kami</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            about us 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="artikel.php">artikel</a></li>
            <li><a class="dropdown-item" href="event.php">event</a></li>
            <li><a class="dropdown-item" href="klient.php"> klien kami</a></li>
            <li><a class="dropdown-item" href="galeri.php"> galeri foto</a></li>
          </ul>
        </li>
      </ul>
      <a class="btn btn-primary btn-sm" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" style="margin-left: auto;"><i class='fas fa-user'></i></a>
    </div>
  </div>

</nav>
<!-- end navbar -->
<div class="offcanvas offcanvas-start bg-dark text-white" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Authentication</h5>
    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-unstyled">
      <hr class="bg-white">
      <li><a href="profil.php?id=<?php echo $_SESSION['id_user']; ?>" class="text-decoration-none text-white"><i class="fas fa-user"></i> profil </a></li>
      <br>
      <li><a href="logout.php" class="text-decoration-none text-white"><i class="fas fa-sign-out-alt"></i>log out </a></li>
    </ul>
  </div>
</div>
<!-- end nyaa sidde barr -->

<!-- end nyaa sidde barr -->
<h2>Welcome To TOBA BIKE Club</h2>
<?php
require 'component/carousel.php';
?>
<br>
<h3>club motor</h3>
<div class="row justify-content-evenly">
  <div class="col-4">
    Club motor bukan sekadar tempat berkumpul bagi para pecinta kecepatan dan petualangan. Ini adalah wadah bagi individu yang memiliki hasrat yang sama untuk merasakan kebebasan, mengeksplorasi jalan-jalan terpencil, dan menemukan keindahan yang hanya bisa dirasakan di atas roda. Di sini, kita menemukan lebih dari sekadar hobi, tapi komunitas yang kuat di mana persaudaraan, kesetiaan, dan saling mendukung menjadi pondasi utama. Setiap ride menjadi petualangan baru yang mengikatkan kita lebih erat satu sama lain, memperkuat ikatan persahabatan yang tak tergantikan. Bersama club motor, kami bukan hanya berkendara, tapi juga merayakan kehidupan dan membangun kenangan abadi di setiap jalan yang kami lewati.
  </div>
  <div class="col-4">
    Dari pinggiran kota hingga pedesaan terpencil, kami menjelajahi setiap sudut tanah dengan semangat petualangan yang membara di dalam diri. Bersama motor kesayangan, kami menembus angin dan hambatan, menghadapi tantangan dengan keberanian dan tekad yang tak tergoyahkan. Club motor bukan hanya tentang kecepatan dan aksi, tapi juga tentang saling menghormati, berbagi pengalaman, dan tumbuh bersama sebagai individu. Setiap langkah kami di jalanan adalah perayaan kebebasan, kebersamaan, dan cinta terhadap kehidupan. Bergabunglah dengan kami, rasakan semangat kehidupan di atas roda, dan temukan saudara sejati di klub motor.
    </div>
</div>
<br>
<h3>produk kami </h3>
<?php
require 'component/peroduk.php';
?>
<br>
<?php
require 'component/footer.php';
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>