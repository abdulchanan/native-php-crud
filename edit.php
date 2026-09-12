<?php include "koneksi.php";  
include "cek-login.php";

// tangkap id yang dikirim dan dimasukan ke variabel
$id = $_GET["id"];


// buat variabel penampung query
$sql = "SELECT * FROM buku WHERE id = $id";

// buat variabel penampung eksekusi query
$result = mysqli_query($conn, $sql);

// ketika data dari database udah di select, tinggal di keluarkan menjadi array
$data = mysqli_fetch_assoc($result);

// var_dump($data);
// echo $data['penulis'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h2>Edit Data</h2>

    <form action="edit-proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        

        <div class="mb-3">
            <label for="penulis-form" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis-form" name="penulis" value="<?php echo $data['penulis']; ?>">
        </div>

        <div class="mb-3">
            <label for="judul-form" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul-form" name="judul" value="<?php echo $data['judul']; ?>">
        </div>

        <div class="mb-3">
            <label for="stok-form" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok-form" name="stok" value="<?php echo $data['stok']; ?>">
        </div>

        <div class="mb-3">
            <label for="tahun-form" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" id="tahun-form" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>">
        </div>

        <button type="submit" class="btn btn-warning">UPDATE</button>
    </form>
</body>
</html>