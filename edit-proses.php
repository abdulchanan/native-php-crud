<?php 



include "koneksi.php";

$id = $_POST["id"];
$penulis = $_POST["penulis"];
$judul = $_POST["judul"];
$stok = $_POST["stok"];
$tahun_terbit = $_POST["tahun_terbit"];


// echo $id;
// var_dump($id);
// belum berhasil menerima id form handling dari iseng2.php

// UPDATE. SUDAH BERHASIL MENERIMA ID
// kerja bagus

$sql = "UPDATE buku SET penulis = '$penulis', judul = '$judul', stok = '$stok', tahun_terbit = '$tahun_terbit' WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
     ?> 
     <script>
     alert("Data Berhasil Update");
        window.location.href = "list.php";
     </script>
     <?php
} else {
    echo "gagal update" . mysqli_error();
}

mysqli_close($conn);
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
    <script src="https://jsdelivr.net"></script>
</body>
</html>