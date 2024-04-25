<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Perusahaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: #fff;
        }
        .profile-section {
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
           
        }
        .profile-image {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .section-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
            color:#c0c0c0;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .section-content {
            font-size: 18px;
        }

        /* Custom Grid */
        .grid-item {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;

        }
        .grid-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.4);
        }
        .grid-item img {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
            margin-bottom: 10px;

        }
        .grid-item h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color:white;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .grid-item p {
            font-size: 16px;
            margin-bottom: 0;
        }
       
    </style>
</head>
<body>
    <?php
    require 'component/navbar.php';
    ?>
    <br>
    <div class="container">
        <h1 class="text-center">Profil Perusahaan</h1>
        <div class="row profile-section">
            <div class="col-md-4">
                <img src="image/logo.png" class="profile-image img-fluid mx-auto d-block" alt="Profile Image" >
            </div>
            <div class="col-md-8">
                <h2 class="section-title">Tentang Perusahaan</h2>
                <p class="section-content">
"Bersatu dalam Gairah, Melintasi Batas dengan Satu Pukulan Gas: Perjalanan Bersama Klub Motor yang Menggetarkan Jiwa"

Di Dunia di Mana Aspal adalah Catatan, Klub Motor Kami Adalah Pencipta Kisah Tak Terlupakan: Semangat, Persaudaraan, dan Petualangan yang Tak Tertandingi


</p>
            </div>
        </div>
        <div class="row grid">
    <div class="col-md-6">
        <div class="grid-item">
            <img src="image/auto.webp" alt="Experience Image" style="width: 100%; height: 100%; object-fit: cover;">
            <h2 class="section-title">Pengalaman Perusahaan</h2>
            <p class="section-content">  pengalaman bersama perusahaan club motor adalah sebuah perjalanan yang menggetarkan jiwa. Setiap putaran roda menjadi sebuah cerita, setiap tikungan menjadi pengalaman baru. Di tengah gemuruh mesin dan deru angin, kami menemukan persaudaraan yang tak tertandingi. Dari jalanan perkotaan hingga jalan-jalan terpencil, setiap kilometer adalah petualangan yang memperkuat ikatan di antara kami. Bersama-sama, kami menjelajahi dunia dengan penuh semangat, menciptakan kenangan yang tak terlupakan dan merajut kisah-kisah legendaris yang akan kami kenang selamanya.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="grid-item">
            <img src="image/kelebihan.jpg" alt="Advantage Image" style="width: 100%; height: 100%; object-fit: cover;">
            <h2 class="section-title">Keunggulan Perusahaan</h2>
            <p class="section-content">Keunggulan Toba Bike Club Motor tidak hanya terletak pada keindahan alam sekitar dan petualangan yang mendebarkan, tetapi juga pada semangat persaudaraan yang mengikat setiap anggota sebagai satu keluarga. Dengan jaringan yang solid dan komunitas yang inklusif, Toba Bike Club Motor memberikan kesempatan bagi para pecinta motor untuk saling bertukar pengalaman, pengetahuan, dan keahlian dalam berkendara. Dengan acara rutin seperti tur keliling dan kegiatan amal, klub ini tidak hanya menjadi tempat untuk mengejar kecepatan, tetapi juga sarana untuk memberi kembali kepada masyarakat dan merasakan kepuasan yang mendalam dalam berbagi kebahagiaan. Dengan semangat persatuan dan semangat petualangan yang tak kenal lelah, Toba Bike Club</p>
        </div>
    </div>
</div>

    </div>
    <?php
require 'component/footer.php';
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
