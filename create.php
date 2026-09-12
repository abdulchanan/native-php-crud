<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
    


    <?php 
    include "koneksi.php";    
     

    $judul = $_GET["judul"];
    $penulis = $_GET["penulis"];
    $tahun_terbit = $_GET["tahun_terbit"];
    $stok = $_GET["stok"];
    
    

    $sql = "INSERT INTO buku (judul, penulis, tahun_terbit, stok) VALUES ('$judul', '$penulis', '$tahun_terbit', '$stok')";


    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambah";

        // latihan: buat alert di list.php setelah berhasil menambahkan data
        // kirim id ke list.php
        

        // agar otomatis kembali ke halaman sebelumnya pakai header()
        // header("location: " . $_SERVER['HTTP_REFERER']);
        header("location: list.php?status=sukses");
        exit();
    } else {
        echo "error kakak" . $sql. "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>