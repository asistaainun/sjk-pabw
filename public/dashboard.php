<?php
session_start();

// include"config.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1 class="text-2xl">Dashboard</h1>
    <a href="../dist/php/logoutx.php">Logout</a>
</body>
</html>