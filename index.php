<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>prushaan </title>
    <link rel="shortcut icon" src="image/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- icon font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/style.css">

  </head>
  <body>
    <!-- navbar  -->
    <?php
require 'component/navbar.php';
?>
<br>
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