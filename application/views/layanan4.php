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
            <a href="<?php echo base_url();?>" class="scrollto" style="color: #CC0000;">Klinik Keuangan</a>
          </h3>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li class="menu-active"><a href="<?php echo base_url()?>#about">Layanan</a></li>
            <li><a href="<?php echo base_url()?>#services">Simulasi</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </header><!-- #header -->

    <div class="col-sm-12" style="background: url('assets/img/home/Header Background RED.svg'); background-repeat: no-repeat; background-size: cover; height:100vh">
      <div class="row" style="padding-top:100px">
        <div class="offset-sm-2 col-sm-8" style="z-index: 0;">
          <!-- Add your content here -->
          Financial Health Check
        </div>
      </div>  
    </div>


  <!--==========================
    Footer
    ============================-->
    <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-info">
            <h5 ><img src="assets/img/home/logobaru.jpg" style=" height: 50px;"> <a href="<?php echo base_url();?>" style="color: #CC0000;"><strong>Klinik Keuangan</strong></a></h5>
            <p>Kami memiliki visi untuk menjadikan Perencanaan Keuangan, Perencanaan Investasi, Perencanaan Proteksi dan Perencanaan Pensiun sebagai sesuatu yang menyenangkan, sederhana dan terjangkau bagi seluruh keluarga Indonesia.<br><br>
            Sedangkan misi kami adalah untuk menjadi mitra perencanaan keuangan bagi keluarga Indonesia mewujudkan rencana-rencana keuangannya dan menjadikan masa depan lebih cerah dan terjamin secara finansial melalui perencanaan yang baik dan memadai.</p>
          </div>

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>KONSULTASIKAN</h4>
              <ul>
                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url();?>asuransi_jiwa">Perencanaan Proteksi</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url();?>financial_healthcheck">Dana Pendidikan</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url();?>dana_pendidikan">Dana Pensiun</a></li>
                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url();?>dana_pensiun">Financial Health Check</a></li>
              </ul>            
          </div>

          <div class="col-lg-3 col-md-3 footer-contact">
            <h4>Alamat Kami</h4>
            <p>
              Jl. Haji Nawi Raya No.9 <br>
              Jakarta Selatan, 12420<br>
              <strong>Telp/WA:</strong> +62 838 77 600 800<br>
              <strong>Email:</strong> info@klinikkeuangan.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/klinikkeuangan" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/klinik.keuangan" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/klinikkeuanganid/" class="instagram"><i class="fa fa-instagram"></i></a>
            </div>

          </div>
  

          <!-- <div class="col-lg-2 col-md-6 footer-newsletter">
            <h4>Informasi Lain</h4>
            <p>Jika anda ingin mengikuti update informasi tentang kami silahkan subscribe kami dan masukan email pada link subscribe dibawah ini.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div> -->

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
