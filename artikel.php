<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* CSS styling */
     
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 0 15px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #1a73e8;
        }
        .description {
            text-align: center;
            margin-bottom: 50px;
            line-height: 1.6;
        }
        .quote {
            font-style: italic;
            color: #777;
        }
        .highlights {
            margin-top: 50px;
            text-align: center;
        }
        .highlight-item {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<?php
require 'component/navbar.php';
?>
    <div class="container">
        <h1>Tentang Kami</h1>
        <div class="description">
            <p>Selamat datang di dunia inovasi dan keunggulan kami! Di [Nama Perusahaan], kami lebih dari sekadar bisnis - kami adalah visi, semangat, dan komitmen untuk membuat perbedaan.</p>
            <p>Perjalanan kami dimulai dengan gagasan sederhana: untuk menentukan kembali standar industri dan menetapkan patokan keberhasilan baru. Hari ini, kami berdiri dengan bangga, didorong oleh keinginan kami yang tak kenal lelah untuk keunggulan dan dedikasi kami yang teguh kepada pelanggan kami.</p>
            <p>Terokai kisah kami, temui nilai-nilai kami, dan bergabunglah dengan kami dalam misi kami untuk membentuk masa depan. Bersama, mari ciptakan sesuatu yang luar biasa.</p>
            <p class="quote">"Inovasi adalah DNA kami, keunggulan adalah tradisi kami, dan kepuasan pelanggan adalah prioritas kami."</p>
        </div>

    <div class="highlights">
            <h2>Highlight Kami</h2>
            <div class="highlight-item">
                <h3>Misi</h3>
                <p>Misi kami adalah untuk memberikan produk dan layanan yang luar biasa yang melebihi harapan pelanggan, membina hubungan jangka panjang, dan mendorong pertumbuhan yang berkelanjutan.</p>
            </div>
            <div class="highlight-item">
                <h3>Visi</h3>
                <p>Visi kami adalah menjadi pemimpin industri, menetapkan standar keunggulan dan inovasi baru, sambil memberikan dampak positif bagi komunitas kami dan dunia.</p>
            </div>
            <div class="highlight-item">
                <h3>Nilai</h3>
                <p>Di [Nama Perusahaan], nilai-nilai kami memandu segala hal yang kami lakukan. Integritas, keunggulan, kerja sama tim, dan inovasi adalah inti dari budaya kami dan menentukan siapa kami sebagai perusahaan.</p>
            </div>
        </div>

        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
