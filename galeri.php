<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            background-color: #f8f9fa;
        }
        .gallery-container {
            margin-top: 50px;
        }
        .gallery-item {
            margin-bottom: 30px;
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        .gallery-item img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container gallery-container">
      <a href="index.php" class="btn btn-success"><i class="fas fa-arrow-left"></i> kembali</a>
        <h1 class="text-center">Galeri Foto</h1>

        <div class="row">
            <div class="col-md-4 gallery-item">
                <img src="image/moge.jpg" alt="Photo 1">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/moge2.jpg" alt="Photo 2">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/moge3.jpg" alt="Photo 3">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/klien.webp" alt="Photo 4">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/kor.jpg" alt="Photo 5">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/rea.jpg" alt="Photo 6">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/moge4.jpg" alt="Photo 6">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/moge5.jpg" alt="Photo 6">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/07.webp" alt="Photo 6">
            </div>
            <div class="col-md-4 gallery-item">
                <img src="image/05.webp" alt="Photo 6">
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
