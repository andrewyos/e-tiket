<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/avatar/1.png">

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
            <a class="nav-link" href="#">Home
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="" style="color: yellow;"><b><?= $user['nama']; ?></b></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('customer/cart'); ?>" style="color: white;"><i class="fa fa-fw fa-cart-plus"></i><sup style="color:white; font-size:15px;"><span class="badge badge-secondary gradient-2"><b><?= $this->db->count_all('cart') ?></b></span></sup></a>
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
  
  <?= $this->session->flashdata('notif'); ?>

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" style="background-image: url('<?= base_url('assets2/img/') ?>gundala.jpeg'); background-size: auto; background-position: center; backgorund-size: 1200px 800px;" >
      <h1 class="display-3" style="color: white;"><b>Popular Film</b></h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
      <a href="#" class="btn btn-info btn-lg">Gundala By Joko Anwar</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
    <?php foreach($film -> result_array()as $f):
        $id_film = $f['id_film'];
        $nama_film = $f['nama_film'];
        $gambar = $f['gambar'];
        $genre = $f['genre'];
        $durasi = $f['durasi'];
        $sutradara = $f['sutradara'];
        $rating = $f['rating'];
      ?>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="<?= base_url('assets2/img/') ?><?= $gambar; ?>" alt="" height="170px" weight="500px">
          <div class="card-body">
            <h4 class="card-title"><?= $nama_film; ?></h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="<?= base_url('customer/datafilm'); ?>/<?= $id_film; ?>" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>


          </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Krishna Hendra 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c3a6dded80.js" crossorigin="anonymous"></script>
</body>

</html>
