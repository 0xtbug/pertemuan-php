<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aplikasi Perpustakaan</h1>

    <a href="./buku.php">Lihat daftar buku</a>
    <a href="./staff.php">Lihat daftar staff</a>

    <br>
    <br>
    <form action="./logout_proccess.php" method="post">
        <button type="submit">Logout</button>
    </form>
</body>
</html>