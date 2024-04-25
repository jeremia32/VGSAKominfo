<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Start session and store user id
            session_start();
            $_SESSION['id_user'] = $row['id_user'];
            
            // Redirect to dashboard or home page after successful login
            header("Location: beranda.php");
            exit;
        }
    }
    
    // Redirect back to login page with error message
    header("Location: login.php?error=login_failed");
    exit;
}
?>
