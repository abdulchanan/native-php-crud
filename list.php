<?php include "koneksi.php";
include "cek-login.php"; 
// ini masuk dalam MVC sebagai M(model)
$sql = "SELECT id, judul, penulis, tahun_terbit, stok FROM buku";

// terima id dari create.php
// munculkan alert disini "data berhasil ditambahkan"
// $pesan_tambah_data = $_GET['status'];

// if ($pesan_tambah_data == 'sukses') {

//     // kalau cuma pakai ini akan muncul alert terus menerus karena url masih menempel
//     echo "<script>alert('Berhasil Tambah Data');
//     if (window.history.replaceState) {
//         window.history.replaceState(null, null, 'list.php');
//     }
//     </script>";

//     // trik alternativ session agar browser bersih tanpa reload
// }

// buat fitur pencarian
// 1. jika tombol cari di form ditekan, akan diterima $_POST['cari'], disini $conn juga dimasukan soalnya tidak bisa jika digunakan di dalam fungsi tertentu
if (isset($_GET['cari'])) {
    $sql = pencarian($_GET['keyword']);
}

// 2. maka akan menimpa query $sql yang sudah ada. jadi hanya menampilkan pencarian (WHERE judul = 'keyword')
// $xxx = "SELECT * FROM buku WHERE judul = 'keyword'";

function pencarian($keyword) {
    $pencarian = "SELECT * FROM buku WHERE judul LIKE '%$keyword%'";
    return $pencarian;
}

// function nama_fungsi() {
//     echo "selamat pagi";
// }

// nama_fungsi();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h2 style="color: blue;">Daftar Manajemen Buku</h2>

    <form action="" method="get">
        <input type="text" name="keyword" size="40px" placeholder="masukan pencarian...">
        <button type="submit" name="cari">Cari🔍</button>
    </form>
    <br> <br>
    <a href="form.php" style="text-decoration: none; background-color: aquamarine; padding: 15px; border-radius: 10px; border: 2px solid blue;">Tambah Buku Baru</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered table-warning table-hover">
        <tr class="table-warning">
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Stok</th>
            <th>Aksi</th>
            <th>Aksi2</th>
            <th>Aksi3</th>
        </tr>

        <?php 

        $result = mysqli_query($conn, $sql); // eksekusi query[cite: 1]

    // tolong dilanjutkan
        if (mysqli_num_rows($result) > 0) { // proses hasil query[cite: 1]
            while($row = mysqli_fetch_assoc($result)) { //[cite: 1]
                // ini masuk dalam MVC sebagai Views
                // mysqli fetch assoc mengeluarkan array 1 bari, ketika sudah keluar 1 baris akan otomatis keluar baris berikutnya
                echo "<tr class='table-warning'>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["judul"] . "</td>";
                echo "<td>" . $row["penulis"] . "</td>";
                echo "<td>" . $row["tahun_terbit"] . "</td>";
                echo "<td>" . $row["stok"] . "</td>";
                // RAHASIA UPDATE ADA DI BARIS BAWAH INI:
                // Kita mengirimkan ID buku ke halaman edit.php lewat URL

                // ini masuk dalam konsep MVC, sebagai C(Controller)
                // Baris 1 (Budi, ID: 1): <a href='edit.php?id=1'>Edit</a>
                // Baris 2 (Andi, ID: 2): <a href='edit.php?id=2'>Edit</a>
                // Baris 3 (Cici, ID: 3): <a href='edit.php?id=3'>Edit</a>
                echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>";
                echo "<td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
                echo "<td><a href='iseng2.php?id=" . $row["id"] . "'>Iseng</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data buku</td></tr>";
        }
        mysqli_close($conn); //[cite: 1]
        ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>