<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if (mysqli_query($koneksi, $query)) {
        // Registrasi berhasil, arahkan pengguna ke halaman login
        header("Location: login.php");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    
    mysqli_close($koneksi);
}
?>
