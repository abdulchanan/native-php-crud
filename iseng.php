<?php 
include "koneksi.php";


$sql = "SELECT id, judul, penulis, tahun_terbit, stok FROM buku";

$result = mysqli_query($conn, $sql);
// $print = mysqli_fetch_assoc($result);
$semua_buku = [];

while ($row = mysqli_fetch_assoc($result)) {
    // $semua_buku[] = $row; // perbarui data array, jadi array yang kosong akan diperbarui dengan data dari database yang dipanggil fetch_assoc dan diulang oleh while
    echo $row['judul'] . $row['id']; // ambil judul saja
}

var_dump($semua_buku);


// var_dump($print);


// PR
// mau coba munculin sebuah baris data dari database dengan mysqli_fetch_assoc
// mysqli_fetch_assoc akan memunculkan data baris pertama, ketika sudah muncul otomasi akan memunculkan baris ke dua. gunakan perulangan while untuk membuat fetch_assoc memunculkan semua data

// dalam pengkondisian/perulangan if/while, pendirian variabel ($sql = "SELECT id, judul FROM buku") juga menghasilkan nilai truth or false
// pendirian variabel juga sudah berjalan




?>