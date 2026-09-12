<?php include "koneksi.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pendaftaran Akun</h2>
    <form action="register-proses.php" method="post">
        <input type="hidden" name="id">
        <input type="text" name="username" placeholder="buat nama pengguna" required>
        <input type="password" name="password" placeholder="buat password" required>
        <input type="text" name="nama_lengkap" placeholder="masukan nama lengkap" required>
        <button type="submit" name="register">Buat Akun</button>
    </form>
    <p>sudah punya akun? <a href="login.php">Login disini</a></p>

</body>
</html>
