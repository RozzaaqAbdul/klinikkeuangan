<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Superieur Admin - Sign Up </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/master_style.css">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/skins/_all-skins.css">

</head>
<body class="hold-transition bg-img rtl" data-overlay="4">
	
	<div class="auth-2-outer row align-items-center h-p100 m-0">
		<div class="auth-2">
		  <div class="auth-logo font-size-40">
			<a href="#" class="text-white"><b>Superieur</b>Admin</a>
		  </div>
		  <!-- /.login-logo -->
		  <div class="auth-body">
			<p class="auth-msg">
			<?php if (isset($flash)) {?>
				<?=$flash;?>
			<?php }?>
			</p>

			<form action="<?=site_url('welcome/sign_up');?>" method="post" class="form-element">
			  <div class="form-group has-feedback">
				<input type="text" name="sign_up_nama" class="form-control" placeholder="Full name">
				<span class="ion ion-person form-control-feedback "></span>
			  </div>
			  <div class="form-group has-feedback">
				<input type="email" name="sign_up_email" class="form-control" placeholder="Email">
				<span class="ion ion-email form-control-feedback "></span>
			  </div>
			  <div class="form-group has-feedback">
				<input type="password" name="sign_up_password" class="form-control" placeholder="Password">
				<span class="ion ion-locked form-control-feedback "></span>
			  </div>
			  <div class="form-group has-feedback">
				<input type="password" name="sign_up_retype_password" class="form-control" placeholder="Retype password">
				<span class="ion ion-log-in form-control-feedback "></span>
			  </div>
			  <div class="row">
				<!-- /.col -->
				<div class="col-12 text-center">
				  <button type="submit" class="btn btn-block mt-10 btn-success">SIGN UP</button>
				</div>
				<!-- /.col -->
			  </div>
			</form>

			<div class="margin-top-30 text-center">
				<p>Already have an account? <a href="<?=site_url("welcome")?>" class="text-info m-l-5">Sign In</a></p>
			</div>

		  </div>
		</div>
	
	</div>
	

	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- popper -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
