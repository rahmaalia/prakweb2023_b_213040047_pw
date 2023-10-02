<?php 

  require 'functions.php';
  $buku = query("SELECT * FROM buku join kategori on kategori.id_kategori = buku.kategori_id ; ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>

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

        <!-- CARD PRODUK -->
    <div id="container">
      <section id="data" class="container text-center my-3 ">
        <div class="row mt-5 justify-content">
          <div class="  mb-4 ">
            <div class="col ">
              <h3 class="produk-text mb-4 fw-bold  d-inline float-start ">Produk Buku</h3>
            </div>
          </div>
          <?php foreach ($buku as $buk) : ?>
            <div class="col-sm-5 col-md-3 zoom">
              <a href="detail.php?id=<?= $buk['id_buku'] ?>"">
              <div class="card text-center mb-3">
                <img src="img/<?= $buk["gambar"]; ?>" class="card-img-top" width="200px" height="400">
                <div class="card-body">
                  <a class="btn btn-4 col-12 text-uppercase fw-bold fs-6 text-left" href="detail.php?id=<?= $pro['id_buku'] ?>">
                    <?= $buk["judul_buku"]; ?>
                  </a>
                  <p class="text-left col-12"><?=  $buk["penulis"]; ?></p>
                </div>
              </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </section>
    </div>
    <!-- END CARD -->

    
</body>
</html>