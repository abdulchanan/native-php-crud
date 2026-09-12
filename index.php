<?php include "cek-login.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="text-align: center;">
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Manajemen Buku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="register.php">Registrasi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Coming Soon</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

    <div class="container-fluid">
    <h1>Manajemen Buku</h1>
    
    <!-- <div class="card text-bg-dark">
    <a href="list.php"><img src="../crud_php/src/img/bg-buku.jpg" class="card-img" alt="bg-buku"></a>
    <div class="card-img-overlay">
        <h5 class="card-title">Sistem Manajemen Buku</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small>Last updated 3 mins ago</small></p>
    </div>
    </div> -->

    <div class="card mb-3 w-25">
    <img src="src/img/bg-buku.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            <a href="list.php" class="stretched-link text-decoration-none text-dark">Daftar Buku</a>
        </h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
    </div>

    <!-- <div class="container text-center">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
            <div class="col">
                <a href="list.php">Lihat Buku</a>
            </div>
        </div>
    </div>
    </div> -->

    <!-- <form action="create.php" method="get">
        Judul: <input type="text" name="judul"> <br>
        Penulis: <input type="text" name="penulis"> <br>
        Tahun Terbit: <input type="text" name="tahun_terbit"> <br>
        Stok: <input type="text" name="stok"> <br>
        <input type="submit">
    </form> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">

    </script>
</body>
</html>