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
        <div class="col-sm-12" style="background: url('assets/img/home/Header Background RED.svg'); background-repeat: no-repeat; background-size: cover; height:100vh; padding-bottom: 85vw">
          <div class="row" style="padding-top:0px">
            <div class="col-sm-12 d-none d-sm-block" style="padding-left:5vw;padding-top:5vw; z-index: 0;">
              
              <form id="simulasi-jiwa-form" method="post" action="<?php echo base_url()?>financial_healthcheck_result/get" role="form">
                  <div class="col-sm-6 d-none d-sm-block" style="padding-top:5vw; padding-bottom:2vw; z-index: 0;">
                  <strong>
                    <label for="exampleInputEmail1">Alamat Email</label>
                  </strong>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>

                <table class="table table-responsive table-striped table-bordered table-hover" style="font-size: 10px;">
                 <thead>
                   <tr>
                    <th style="width: 5%; text-align: center">No</th>
                    <th style="width: 35%; text-align: center">Pertanyaan</th>
                    <th style="width: 15%; text-align: center">Variabel 1</th>
                    <th style="width: 15%; text-align: center">Variabel 2</th>
                    <th style="width: 15%; text-align: center">Variabel 3</th>
                    <th style="width: 15%; text-align: center">Variabel 4</th>
                  </tr>
                </thead>
                <tbody>

                  <!-- get data using model -->
                  <?php $i=1; $no=1;
                  foreach ($data as $row) { ?>

                   <tr>
                    <td align="center"><?php echo $no?> </td>
                    <td >
                      <label><?php echo $row->question ?></label>    
                    </td>
                    <td>
                      <label><input type="radio" id='value_<?php echo $i?>' name="value_<?php echo $i?>" value="<?php echo $row->value_1 ?>"><?php echo $row->variable_1 ?></label>
                    </td>
                    <td>
                      <label><input type="radio" id='value_<?php echo $i?>' name="value_<?php echo $i?>" value="<?php echo $row->value_2 ?>"><?php echo $row->variable_2 ?></label>
                    </td>
                    <td>
                      <label><input type="radio" id='value_<?php echo $i?>' name="value_<?php echo $i?>" value="<?php echo $row->value_3 ?>"><?php echo $row->variable_3 ?></label>
                    </td>
                    <td>
                      <label><input type="radio" id='value_<?php echo $i?>' name="value_<?php echo $i?>" value="<?php echo $row->value_4 ?>"><?php echo $row->variable_4 ?></label>
                    </td>
                  </tr>

                  <?php $i++; $no++;
                } 
                ?>

      </tbody>
    </table>
    <!-- <input type="text" id='total' name="total" value=""> -->
    <div align="right">
      <button class="btn btn-danger btn-sm" type="submit" >Submit</button>
      <button class="btn btn-secondary btn-sm" type="submit" onclick="document.location.href='<?php echo base_url();?>'" >Cancel</button>
    </div>
  </form>

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
    
  </script>

</body>
</html>
