<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Tiketin</title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/'); ?>../../assets/images/favicon.png">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

</head>

<body class="h-100">

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
			</svg>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->





	<div class="login-form-bg h-100">
		<div class="container h-100">
			<div class="row justify-content-center h-100">
				<div class="col-xl-6">
					<div class="form-input-content">
						<div class="card login-form mb-0">
							<div class="card-body p2-5">

								<a class="text-center ml-5 pl-5" href="">
                                <img class="ml-5 pl-5" src="<?= base_url('assets/images/tiket2.png') ?>" alt="" weight="100px" height="100px">
                                </a>
                                <h4 class="text-center label label-primary"><b class="ml-3">REGISTRATION</b></h4>
                                <?= $this->session->flashdata('flash'); ?>

								<form class="mt-3 mb-5 login-input" action="<?= base_url('auth/registration'); ?>" method="POST">
									<div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" >
                                        <?= form_error('name','<h6 class="label label-danger">','</h6>') ?>
									</div>
									<div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username'); ?>" >
                                        <?= form_error('username','<h6 class="label label-danger">','</h6>') ?>
									</div>
									<div class="form-group">
                                        <input type="password" name="password1" class="form-control" placeholder="Password" >
                                        <?= form_error('password1','<h6 class="label label-danger">','</h6>') ?>
									</div>
									<div class="form-group">
                                        <input type="password" name="password2" class="form-control" placeholder="Repeat Password" >
                                        
									</div>
									<button class="btn login-form__btn submit w-100">Sign in</button>
								</form>
								<p class="mt-1 login-form__footer">Have account <a href="<?= base_url('auth') ?>"
										class="text-primary"><b>Sign In</b> </a> now</p>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>




	<!--**********************************
        Scripts
    ***********************************-->
	<script src="<?= base_url('assets/'); ?>plugins/common/common.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/custom.min.js"></script>
	<script src="<?= base_url('assets/'); ?>js/settings.js"></script>
	<script src="<?= base_url('assets/'); ?>js/gleek.js"></script>
	<script src="<?= base_url('assets/'); ?>js/styleSwitcher.js"></script>
</body>

</html>
