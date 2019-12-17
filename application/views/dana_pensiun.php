<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Klinik Keuangan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="assets/img/home/logobaru.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .responsive-card-simulasi {
      margin-bottom: 10px;
      position: absolute;
      bottom: 0;
    }
    .responsive-card-simulasi img {
      width: 70%;
      transition: 2s;
    }
    .isi-card {
      position: absolute;
      top: 48%;
      left: 65%;
      transform: translate(-50%, -50%);
      font-size: 1.2vw;
    }

    @media screen and (min-width: 1400px) {
      .isi-card {
        position: absolute;
        top: 48%;
        left: 65%;
        transform: translate(-50%, -50%);
        font-size: 16px;
      }
    }
    @media (min-width: 1400px) {
      .responsive-card-simulasi img {
        width: 80%;
        transition: 2s;
      }
    }
  </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h3>
          <img src="assets/img/home/logobaru.jpg" alt="" class="img-fluid" style="height: 40px;">
          <a href="#intro" class="scrollto" style="color: #CC0000;">Klinik Keuangan</a>
        </h3>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="<?php echo base_url()?>#intro">Home</a></li>
          <li><a href="<?php echo base_url()?>#about">Layanan</a></li>
          <li><a href="<?php echo base_url()?>#services">Simulasi</a></li>
          <li><a href="<?php echo base_url()?>#call-to-action">Artikel</a></li>
          <li><a href="<?php echo base_url()?>#testimonials">Testimoni</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <section id="testimonials">
    <div class="intro-container">
        <div class="col-sm-12" style="background: url('assets/img/home/Header Background RED.svg'); background-repeat: no-repeat; background-size: cover; height:100vh">
            <div class="row" style="padding-top:0px">
            	<div class="col-sm-9 d-none d-sm-block" style="padding-left:30vw;padding-top:5vw; z-index: 0;">
            	<form id="simulasi-jiwa-form" method="get" action="<?php echo base_url()?>dana_pensiun_result/get" role="form">

			    <div class="form-group">
			    	<strong>
				    <label for="exampleInputEmail1">Usia Anda saat ini (pilih yang terdekat dengan usia Anda saat ini)</label>
                    </strong>
                    </br>
                    <input type="radio" id='q1' name="q1" value="25" required>25 Tahun  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q1' name="q1" value="30" required>30 Tahun  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q1' name="q1" value="35" required>35 Tahun  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q1' name="q1" value="40" required>40 Tahun  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q1' name="q1" value="45" required>45 Tahun  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q1' name="q1" value="50" required>50 Tahun  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>

                <div class="form-group">
			    	<strong>
				    <label for="exampleInputEmail1">Usia masuk jenjang pendidikan yang dituju</label>
                    </strong>
                    </br>
				    <input type="radio" id='q2' name="q2" value="4" required>4 Juta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q2' name="q2" value="6" required>6 Juta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q2' name="q2" value="9" required>9 Juta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q2' name="q2" value="12" required>12 Juta   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q2' name="q2" value="15" required>15 Juta   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id='q2' name="q2" value="20" required>20 Juta   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</div>

                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2" >
                        Agree to send above data
                    </label>
                    </div>
                </div>

			  <button class="btn btn-danger btn-sm btn-block" type="submit" >Submit</button>
			  <button class="btn btn-secondary btn-sm btn-block" type="" onclick="document.location.href='<?php echo base_url();?>'" >Cancel</button>
			</form>
		</div>
    </div>
            
</div>
    </div>
  </section>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-3 footer-info">
            <h5 ><img src="assets/img/home/logobaru.jpg" style=" height: 50px;"> <a href="#intro" style="color: #CC0000;"><strong>Klinik Keuangan</strong></a></h5>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Tentang</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Produk Kami</h4>
              <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Asuransi Jiwa</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Asuransi Pendidikan</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Dana Pensiun</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="#">Finance Health Check</a></li>
              </ul>            
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
              <h4>Informasi Lain</h4>
              <ul>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Info#1</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Info#2</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Info#3</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Info#4</a></li>
                </ul>                   
          </div>

          <div class="col-lg-3 col-md-3 footer-contact">
            <h4>Alamat Kami</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2019 <a href="https://klinikkeuangan.com/"><strong>Klinik Keuangan</strong></a>. All Right Reserved.
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        <!-- Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade -->
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <script src="assets/lib/jquery/jquery.min.js"></script>
  <script src="assets/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/lib/easing/easing.min.js"></script>
  <script src="assets/lib/superfish/hoverIntent.js"></script>
  <script src="assets/lib/superfish/superfish.min.js"></script>
  <script src="assets/lib/wow/wow.min.js"></script>
  <script src="assets/lib/waypoints/waypoints.min.js"></script>
  <script src="assets/lib/counterup/counterup.min.js"></script>
  <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/lib/lightbox/js/lightbox.min.js"></script>
  <script src="assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="assets/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="assets/js/main.js"></script>

  <!-- Calculation to get total -->
  <script type="text/javascript">

  	function calculate(){
  		var val1 = parseInt(document.getElementById("value1").value);
  		var val2 = parseInt(document.getElementById("value2").value);
  		var val3 = parseInt(document.getElementById("value3").value);

  		var cal1 = val1+val3;
  		var cal2 = val2/0.005;
  		var total = cal2-cal1;

  		var result = document.getElementById('total').value=total;

  	}
  </script>

</body>
</html>
