<?php
  $page = $detailPage;
  $title = $titlePage
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/images/favicon.ico">

    <title>Klinik Keuangan - Admin</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap-extend.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/master_style.css">
	
	<!-- Superieur Admin skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/skins/_all-skins.css">
	
	<!-- daterange picker -->	
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- Morris charts -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor_components/morris.js/morris.css">
	
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/vendor_components/datatable/datatables.min.css"/>

  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'v_header.php'?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'v_left_sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content-header">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="page-title"><?=$title;?></h3>
				<div class="d-inline-block align-items-center">
					<nav>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a><i class="mdi mdi-home-outline"></i></a></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
  <!-- Main content -->
  <section class="content">
    <?php include $include;?>
	</section>
    <!-- /.content -->
	</div>
</div>
<!-- ./wrapper -->
  	
	 
	  
	<!-- jQuery 3 -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- date-range-picker -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- ChartJS -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/chart.js-master/Chart.min.js"></script>
	
	<!-- Slimscroll -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/fastclick/lib/fastclick.js"></script>
		
	<!-- Morris.js charts -->
	<script src="<?php echo base_url(); ?>/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor_components/morris.js/morris.min.js"></script>

	<!-- This is data table -->
    <script src="<?php echo base_url(); ?>/assets/vendor_components/datatable/datatables.min.js"></script>
	
	<!-- Superieur Admin App -->
	<script src="<?php echo base_url(); ?>/assets/js/template.js"></script>
	
	<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url(); ?>/assets/js/pages/dashboard.js"></script>
</body>
</html>
