<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/images/favicon.ico">

    <title>Superieur Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-extend.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/master_style.css">

	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/skins/_all-skins.css">

</head>
<body class="hold-transition bg-img" data-overlay="4">
	
	<div class="auth-2-outer row align-items-center h-p100 m-0">
		<div class="auth-2">
		  <div class="auth-logo font-size-40">
			<a class="text-white"><b>Superieur</b>Admin</a>
		  </div>
		  <!-- /.login-logo -->
		  <div class="auth-body">
			<p class="auth-msg">
			<?php if (isset($error)) {?>
				<?=$error;?>
			<?php }?>
			</p>

			<form action="" method="post" class="form-element">
			  <div class="form-group has-feedback">
				<input type="email" name="lgn_user" class="form-control" placeholder="Email">
				<span class="ion ion-email form-control-feedback"></span>
			  </div>
			  <div class="form-group has-feedback">
				<input type="password" name="lgn_pass" class="form-control" placeholder="Password">
				<span class="ion ion-locked form-control-feedback"></span>
			  </div>
			  <div class="row">
				<!-- /.col -->
				<div class="col-12 text-center">
				  <button type="submit" class="btn btn-block mt-10 btn-success">SIGN IN</button>
				</div>
				<!-- /.col -->
			  </div>
			</form>

			<div class="text-center text-white">
			<div class="margin-top-30 text-center">
				<p>Don't have an account? <a href="auth_register2.html" class="text-info m-l-5">Sign Up</a></p>
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
