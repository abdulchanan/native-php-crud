<?php include "cek-login.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="text-align: center;">
    <h2 style="color: rgb(0, 4, 255);">Tambah Buku</h2>
    <!-- <form action="create.php" method="get" style="text-align: center;">
        Judul:          <input type="text" name="judul"> <br>
        Penulis:        <input type="text" name="penulis"> <br>
        Tahun Terbit:   <input type="text" name="tahun_terbit"> <br>
        Stok:           <input type="text" name="stok"> <br>
        <input type="submit" style="background-color: steelblue; border-radius: 5px; padding: 10px;">
    </form> -->

    <form action="create.php" method="get" class="w-50">
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Judul</span>
    <input type="text" name="judul" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Penulis</span>
    <input type="text" name="penulis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Tahun Terbit</span>
    <input type="text" name="tahun_terbit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
    <span class="input-group-text" id="inputGroup-sizing-sm">Stok</span>
    <input type="text" name="stok" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <button type="submit" class="btn btn-outline-success">Success</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>