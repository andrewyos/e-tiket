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
            <a class="nav-link" href="<?= base_url('customer') ?>">Home
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" href="" style="color: yellow;"><b><?= $user['nama']; ?></b></a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link" href="<?= base_url('customer/cart'); ?>" style="color: white;"><i class="fa fa-fw fa-cart-plus"></i><sup style="color:white; font-size:12px;"><b><?= $this->db->count_all('cart') ?></b></sup></a>
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

<div class="row">
    <div class="col-md-12">
    <?= $this->session->flashdata('notif') ?>
    <table class="table table-hover table-bordered mt-5 mb-2"> 
        <tr style="background-color: grey;">
            <td>FILM</td>
            <td>TANGGAL PEMBELIAN</td>
            <td>HARGA</td>
            <td class="text-center">DELETE</td>
        </tr>
        <?php foreach($data->result_array() as $d):
            $id_film = $d['id_film'];
            $nama_film = $d['nama_film'];
            $tanggal = $d['tanggal'];

        ?>
            <tr>
                <td><?= $nama_film; ?></td>
                <td><?= date('d M Y (H:i:s)',$tanggal) ?></td>
                <td>Rp. 50,000 </td>
                <td class="text-center" style="width:20px;"><a href="<?= base_url('customer/hapus_cart') ?>/<?= $d['id_cart']; ?>" class="btn btn-danger">X</a></td>
            </tr>
        <?php endforeach; ?>
        </table>

        <button action="<?= base_url('customer/clear')?>" type="submit" class="btn btn-block btn-primary" method=>CHECKOUT</button>

    </div>
</div>


</div>
  <!-- /.container -->

  <!-- Footer -->
  <!-- <footer class="py-3 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Krishna Hendra 2019</p>
    </div> -->
    <!-- /.container -->
  <!-- </footer> -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets2/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets2/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/c3a6dded80.js" crossorigin="anonymous"></script>
</body>

</html>