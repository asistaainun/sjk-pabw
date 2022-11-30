<?php
include "config.php";

$uname = $_POST["username"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$hashpass = password_hash($pass, PASSWORD_DEFAULT);
$sql = "INSERT INTO peserta (username, email ,pass) VALUES ( '$uname','$email', '$hashpass')";

$hasil = $conn->query($sql);

if ($hasil === TRUE) {
    //verifikasi pop up disini form
    header('Location: ../../public/login.php');
}else{
    echo"gagal di input";
}
$conn -> close();
?>