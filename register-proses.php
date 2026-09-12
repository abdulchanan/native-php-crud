<?php include "koneksi.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_aman = password_hash($password, PASSWORD_DEFAULT);
    $nama_lengkap = $_POST['nama_lengkap'];

    $sql = "INSERT INTO pengguna (username, password, nama_lengkap) VALUES ('$username', '$password_aman', '$nama_lengkap')";
    
    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
    } else {
        echo "registrasi gagal" . mysqli_error();
    }

    mysqli_close($conn);

    ?>
</body>
</html>