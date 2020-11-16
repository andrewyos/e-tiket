<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Petix</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets2/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets2/'); ?>css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #7571f9;">
    <div class="container"> 
      <a class="navbar-brand" href="#"><b><i class="fa fa-film"></i> PETIX</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('customer/index'); ?>">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="" style="color: yellow;"><b><?= $user['nama']; ?></b></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" style="color: #1b0f47;"><i class="fa fa-fw fa-cart-plus"></i></a>
          </li>
            <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-fw fa-sign-out-alt"></i></a>
            </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
  
  <?php foreach($film->result_array()as $f):
             $id_film = $f['id_film'];
             $nama_film = $f['nama_film'];
             $gambar = $f['gambar'];
             $genre = $f['genre'];
             $durasi = $f['durasi'];
             $sutradara = $f['sutradara'];
             $rating = $f['rating'];
          ?>
    <div class="row">
        <div class="col-md-6 mt-4 mb-4">
        <div class="card h-150">
        <img class="card-img-top" src="<?= base_url('assets2/') ?>img/<?= $gambar; ?>" alt="" height="300px" weight="500px">
        <div class="card-body">
            <h4 class="card-title"><i class="fa fa-fw fa-file-signature"></i> SINOPSIS</h4>
            <p class="card-text"><?= $nama_film ?></p>
            <!-- Seperti ibu pada umumnya, Ros memiliki harapan untuk melihat ketiga anaknya hidup layak dan bahagia. 
            Namun, anak-anaknya kerap menentukan pilihan hidup yang bertentangan dengan kemauan Ros. Anandoyo "Ndoy" Tauhid Sikumbang, 
            anak sulung kesayangan Ros, salah memilih istri. Sedangkan anak bungsu Ros, Yunus "Buncun" Tauhid Sikumbang, terjebak pergaulan 
            bebas hingga harus menikah muda. Harapan Ros bertaruh pada anak tengah keluarga Sikumbang, Indra "Ican" Tauhid Sikumbang. 
            Sayangnya, menikah bukanlah prioritas Ican. Tertekan akan desakan ibunya, Ican memutuskan untuk memesan calon menantu palsu 
            lewat aplikasi Love Inc. -->
          </div>
        </div>
        </div>
    
        

        <div class="col-md-4 mt-4 mb-4">
        <div class="card h-150">
        
        <div class="card-body">
            <h4 class="card-title text-center"><?= $nama_film; ?><hr></h4>
            <p class="card-text"><b>Genre</b>       : <?= $genre; ?> <br>
                                 <b>Durasi</b>      : <?= $durasi; ?> <br>
                                 <b>Sutradara</b>   : <?= $sutradara; ?> <br>
                                 <b>Rating</b>      : <span class="badge badge-warning"><?= $rating; ?></span>
            </p>
            <!-- <p class="card-text"><b>Durasi</b>  : 1 jam 32 menit</p>
            <p class="card-text"><b>Sutradara</b> : Andibachtiar Yusuf</p>
            <p class="card-text"><b>Rating</b> : <span class="badge badge-warning">D17+</span></p> -->
          </div>
        </div>
          <hr style="background-color: white;">
          <!-- TRANSAKSI -->
          <form action="<?= base_url('customer/transaksi'); ?>" method="post">
          <input type="hidden" value="<?= $id_film; ?>" name="id_film">
          <input type="hidden" value="<?= $user['username']; ?>" name="id_user">
          <button type="submit" class="btn-block btn-info btn-large">Book Film</button>
          </form>
        </div>
        <?php endforeach; ?>
    </div>
    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <!-- <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div> -->
    <!-- /.container -->
  <!-- </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c3a6dded80.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
</body>

</html>
