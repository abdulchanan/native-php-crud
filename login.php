<?php include "koneksi.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Silahkan Login Terlebih dahulu</h2>
    <form action="login-proses.php" method="post">
        <input type="text" name="username" placeholder="masukan username">
        <input type="password" name="password" placeholder="masukan password">
        <button type="submit" name="login">Login</button>
    </form>

    <br>
    <p>belum punya akun? <a href="register.php">daftar disini</a></p>
    
</body>
</html>