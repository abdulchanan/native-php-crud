<?php 
session_start(); 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // $_SESSION["favorite_color"] = "green";
    // $_SESSION["favorite_fruit"] = "mango";
    // echo "variabel session tersedia";
    // echo "variabel session tersedia";

    // session_unset();
    // session_destroy();

    // echo "Kamu sudah logout";

    // cari user berdasarkan username dulu. terus ambil password pakai $row

    // jika password udah diambil lanjut cocokan password dari form dengan dari database. jangan lupa pakai password_verify karena password sudah di hash

    // cari berdasarkan username, kemudian if(jika login diklik lanjut) if(jika fetch_assoc === 1 maka) if(jika username = username && password = password maka $_SESSION['login berhasil'])
    // intinya dapatkan username, cocokan username, ambil password dari databse
    // if($username && $password == xx and xx) {
    //     echo "Login berhasil";
    // } else {
    //     echo "Login gagal";
    // }

    if (isset($_POST["login"])) {
        // username dan password diterima dan dimasukan ke variabel
        $username = $_POST["username"];
        $password = $_POST["password"];

        // buat query untuk mengambil data user dari database dengan pencarian username
        $sql = "SELECT * FROM pengguna WHERE username = '$username'";
        // perintah query dimasukan ke variabel $result
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            // fetch_assoc mengambil data dari database dan menjadikan array (1 baris).
            $row = mysqli_fetch_assoc($result);

            // sudah dapat password dari database $row['password'], tinggal cocokan password asli dengan password form

            if (password_verify($password, $row["password"])) {
                // buat session
                $_SESSION['status_login'] = true;
                $_SESSION['username_aktif'] = $row['username'];
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];

                header("location: index.php");
                exit();
            } else {
                echo "password salah";
            }
        } else {
            echo "username tidak ditemukan";
        }

    }

    ?>
</body>
</html>