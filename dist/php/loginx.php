<?php
include "config.php";

session_start();
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
 
    $sql = "SELECT * FROM peserta WHERE username='$username' AND pass='$password'";
    $hasil = mysqli_query($conn, $sql);
    if ($hasil->num_rows > 0) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION['username'] = $row['username'];
        header("Location: ../../public/dashboard.php");
    } else {
        header('Location: ../../public/login.php');
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
$conn -> close();
?>