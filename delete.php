<?php 
include "koneksi.php";

$id_buku = $_GET['id'];

$sql = "DELETE FROM buku WHERE id=$id_buku";
// berhasil menangkap id dari list.php
// tapi belum bisa menghapus 1 baris dari suatu id

if (mysqli_query($conn, $sql)) {
    echo "berhasil hapus data";
} else {
    echo "error ketika menghapus data"
    . mysqli_error($conn);
}

mysqli_close($conn);

?>