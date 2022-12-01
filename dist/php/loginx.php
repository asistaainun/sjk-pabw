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
        // $_SESSION["login"] = true; 
        header('Location: ../../public/dashboard.php');
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
        header('Location: ../../public/login.php');
    }
}
$conn -> close();
?>