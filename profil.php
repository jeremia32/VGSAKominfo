<?php
// Sertakan file koneksi.php untuk menghubungkan ke database
include 'koneksi.php';

// Ambil id_user dari URL menggunakan $_GET
if (isset($_GET['id'])) {
    $id_user = $_GET['id'];
} else {
    // Tindakan yang akan diambil jika parameter id tidak ada di URL
    echo "Parameter id tidak ditemukan dalam URL.";
    exit;
}

// Lakukan query untuk mengambil data user dari database berdasarkan id_user
$query = "SELECT * FROM user WHERE id_user = $id_user";
$result = mysqli_query($koneksi, $query);

// Periksa apakah data ditemukan
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $email = $row['email'];
    
    // Anda dapat menambahkan lebih banyak data pengguna yang ingin ditampilkan di sini
} else {
    // Tindakan yang akan diambil jika id_user tidak ditemukan
    echo "User tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Link CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Profil Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Username:</strong> <?php echo $username; ?></p>
                        <p><strong>Email:</strong> <?php echo $email; ?></p>
                        <!-- Anda dapat menambahkan lebih banyak data pengguna yang ingin ditampilkan di sini -->
                        <a href="beranda.php" class="btn btn-primary">kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
