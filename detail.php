<?php 

require 'functions.php';
// mengambil id dari url
$id = $_GET['id'];

$buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.kategori_id WHERE id_buku = $id; ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buku</title>

    <!-- css  -->
    <link rel="stylesheet" href="style.css" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome -->
      <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="index-body" style="background-color: #f1effc; ">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #4F709C;">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><img src="img/logo.png" alt="bg" width="107"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
            <li class="nav-item me-2">
              <a class="nav-link active  text-white" aria-current="page" href="index.php">home</a>
            </li>
          </ul>
          <a class="icon text-decoration-none d-flex text-white " href="#" >
            <i class="fa fa-heart"></i>
          </a>
          <a class="icon text-decoration-none d-flex text-white ms-3 " href="#" >
            <i class="fas fa-shopping-cart"></i>
          </a>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <section class="detail">
      <div class="container">
        <div class="row mt-3 mb-5">
        <div class="  mb-4 mt-4 ">
            <div class="col ">
              <h3 class="produk-text fw-bold  d-inline float-start ">Detail Buku</h3>
            </div>
          </div>
        <?php foreach ($buku as $pro) : ?>
          <div class="col-md-6">
            <img src="img/<?= $pro['gambar']; ?>" alt="" width="500">
          </div>
          <div class="col-md-6">
            <div class="wrapper mt-4">
              <h5><?= $pro['nama_kategori']; ?></h5>
              <h2 class="tittle mt-5" ><strong> <?= $pro['judul_buku']; ?></strong></h2>
              <h5 class="mt-5">Penulis : </h5>
              <h5><?= $pro["penulis"] ; ?></h5>
              <h5 class="mt-5">Tahun terbit : </h5>
              <h5><?= $pro['tahun_terbit']; ?></h5>
              <h5 class="mt-5">Penerbit : </h5>
              <h5 ><?= $pro['penerbit']; ?></h5>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Footer -->
    <footer class=" text-white text-center pb-1" style="background-color: #4F709C;">
      <p class="pt-2">Dibuat<i class="bi bi-heart text-white"></i> oleh <a href="https://www.instagram.com/rahmaaliaputri27/" class="text-white fw-bold">Rahma Aliaputri Efendi</a></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>