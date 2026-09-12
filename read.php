<?php 
include "koneksi.php";


$sql = "SELECT id, judul, penulis, tahun_terbit, stok FROM buku";

// eksekusi query
$result = mysqli_query($conn, $sql);


// proses hasil query dalam angka

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id:" . $row["id"]. " - Judul: " . $row["judul"]. " - Penulis: " . $row["penulis"]. " - Tahun Terbit: " . $row["tahun_terbit"]. " - Stok: " . $row["stok"]. "<br>";
    }
} else {
    echo "0 Result";
}

mysqli_close($conn);
?>