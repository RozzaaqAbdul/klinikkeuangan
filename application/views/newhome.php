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
        <!-- <img src="assets/img/primary.jpg" alt="" class="img-fluid"> -->
        <h3>
          <img src="assets/img/home/logobaru.jpg" alt="" class="img-fluid" style="height: 40px;">
          <a href="#intro" class="scrollto" style="color: #CC0000;">Klinik Keuangan</a>
        </h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Layanan</a></li>
          <li><a href="#services">Simulasi</a></li>
          <li><a href="#artikel">Artikel</a></li>
          <li><a href="#testimonials">Testimoni</a></li>
          <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->

          <!-- 
          <li><a href="#contact">Contact</a></li>-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <section id="intro">
    <div class="intro-container">
        <div class="col-sm-12" style="background: url('assets/img/home/Header Background RED.svg'); background-repeat: no-repeat; background-size: cover; height:100vh">
            <div class="row" style="padding-top:80px">
                    <!-- visible di layar sm keatas -->
                    <div class="col-sm-7 d-none d-sm-block" style="padding-left:17vw;padding-top:10vw; z-index: 10;">
                            <span style="font-size: 22px;">Karena Langit Tidak <font color="#CC0000">Selalu</font> Secerah Ini</span><br>
                            Semua memang terasa indah saat langit secerah ini, dan kita semua mengharapkan kecerahan ini berlangsung selamanya.
                    </div>
                    <img src="assets/img/home/Illustrasi RED.svg" width="30%" style="position: absolute; margin-top:-5vh;  margin-left:55vw;" class="d-none d-sm-block">

                    <!-- visible di layar xs saja -->
                    <div class="col-xs-12 d-block d-sm-none" style="padding:20px; padding-top: 100px;">
                      <span style="font-size: 22px;">Karena Langit Tidak <font color="#CC0000">Selalu</font> Secerah Ini</span><br>
                      Semua memang terasa indah saat langit secerah ini, dan kita semua mengharapkan kecerahan ini berlangsung selamanya.
                    </div>

                    <!-- visible di layar sm keatas -->
                    <div class="col-sm-12 d-none d-sm-block responsive-card-simulasi">
                      <center><img src="assets/img/home/Card.svg"></center>
                      <div class="isi-card">
                        <span style="font-size: 1.7vw;">Simulasi</span><br>
                        Kami akan bekerjasama dengan Anda untuk menjadikan aktivitas Perencanaan Keuangan sesuatu hal yang menyenangkan, mudah dipahami dan terjangkau oleh kemampuan Anda.<br>
                        <!-- <div class="pull-right"><a href="#services" class="btn btn-danger" style="color: #fff;">Detail Info</a></div> -->
                      </div>
                    </div>
                    <!-- visible di layar xs saja -->
                    <div class="col-xs-12 d-block d-sm-none" style="padding:20px; margin-top: 100px; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px;">
                      <span style="font-size: 22px;">Simulasi</span><br>
                      Kami akan bekerjasama dengan Anda untuk menjadikan aktivitas Perencanaan Keuangan sesuatu hal yang menyenangkan, mudah dipahami dan terjangkau oleh kemampuan Anda.<br>
                      <!-- <div class="pull-right"><a href="#services" class="btn btn-danger" style="color: #fff;">Detail Info</a></div> -->
                    </div>
            </div>
            
        </div>
    </div>
  </section>

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <!-- <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Lorem Ipsum Delino</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>

        </div>
      </div>
    </section> -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Layanan Pereancanaan Investasi Keuangan</h3>
          <p>Kita diciptakan sebagai individu-individu yang unik. Bahkan saudara kembar identik pun memiliki perbedaan. Apalagi jika kita kaji masalah finansial, tidak pernah ada individu yang sama dengan individu lainnya.
          <!-- Untuk itulah, layanan kami pun telah kami desain untuk disesuaikan dengan berbagai keunikan yang Anda miliki sehingga dapat dicapai hasil optimal dan sesuai harapan Anda. --></p>
        </header>

        <div class="row about-cols">

          <div class="col-md-3 wow fadeInUp container">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Perencanaan <br> Keuangan</a></h2>
              <br>
              <!-- <p> <b>1. Perencanaan Keuangan Komprehensif </b><br>
                Membuat suatu perencanaan secara menyeluruh.
              <br>
              <b>2. Perencanaan Keuangan Parsial </b><br>
                Membuat suatu perencanaan yang spesifik di satu aspek tertentu saja.
              </p> -->
            </div>
          </div>


          <div class="col-md-3 wow fadeInUp container" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Saran <br> Keuangan</a></h2>
              <br>
              <!-- <p>
                Layanan Saran Keuangan adalah layanan kami yang dapat diakses klien baik secara online maupun offline. Layanan ini dapat disajikan dalam bentuk sesi konsultasi temu muka, sesi konsultasi melalui telepon, bahkan sesi konsultasi interaktif melalui media chat atau e-mail.
              </p> -->
            </div>
          </div>


          <div class="col-md-3 wow fadeInUp container" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Analisa Produk dan Jasa Keuangan</a></h2>
              <br>
              <!-- <p>
                Layanan Analisa Produk dan Jasa Keuangan adalah layanan kami yang dapat diakses klien baik secara online maupun offline. Layanan ini menumpukan pada jasa untuk melakukan analisa atas suatu produk atau jasa keuangan yang diajukan oleh klien.
              </p> -->
            </div>
          </div>


          <div class="col-md-3 wow fadeInUp container">
            <div class="about-col">
              <div class="img">
                <img src="assets/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Financial Health <br> Check</a></h2>
              <br>
              <!-- <p> 
              Layanan Financial Health Check menekankan pada pemeriksaan tingkat kesehatan keuangan dari klien, dan melakukan pemeriksaan atas pos-pos yang dirasakan menjadi penyebab munculnya masalah pada kondisi finansial klien.
            </p> -->
            </div>
          </div>

          <div class="col-md-auto wow fadeInUp container">
            <div class="about-col">
              <center><a href="#" class="btn btn-danger center" style="color: #fff;"> Lihat Semua Layanan</a></center>
            </div>
          </div>

        </div>


      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Simulasi Keuangan</h3>
          <p>Kami akan bekerjasama dengan Anda untuk menjadikan aktivitas Perencanaan Keuangan sesuatu hal yang menyenangkan, mudah dipahami dan terjangkau oleh kemampuan Anda.</p>
        </header>

        <div class="row center">

          <div class="col-md-5 box wow bounceInUp container" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Perencanaan Proteksi dan Asuransi Jiwa</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            <p class=""><a href="#" class="btn btn-danger" style="color: #fff; font-size: 12px; margin-left: 60px; margin-top: 15px;">Hitung Simulasi </a></p>
          </div>

          <div class="col-md-5 box wow bounceInUp container" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Finance Health Check</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            <p class=""><a href="#" class="btn btn-danger" style="color: #fff; font-size: 12px; margin-left: 60px; margin-top: 15px;">Hitung Simulasi </a></p>
          </div>

          <div class="col-md-5 box wow bounceInUp container" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Perencanaan Dana Pendidikan</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            <p class=""><a href="#" class="btn btn-danger" style="color: #fff; font-size: 12px; margin-left: 60px; margin-top: 15px;">Hitung Simulasi </a></p>
          </div>

          <div class="col-md-5 box wow bounceInUp container" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Perencanaan Dana Pensiun</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <p class=""><a href="#" class="btn btn-danger" style="color: #fff; font-size: 12px; margin-left: 60px; margin-top: 15px;">Hitung Simulasi </a></p>
          </div>

          <!-- <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div> -->

        </div>
      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Menyongsong Masa Depan Dengan Bekal Pendidikan Terbaik</h3>
        <p> Artikel Pendek Mengenai Perencanaan Pendidikan.</p>
        <a class="cta-btn" href="#">Lihat Semua Artikel</a>
      </div>
    </section><!-- #call-to-action -->

    <!-- <section id="clients">
        <span id="artikel"></span>
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Artikel</h3>
        </div>      

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title"><a href="">Menyongsong Masa Depan Dengan Bekal Pendidikan Terbaik</a></h4>
            <p class="description">Artikel Pendek Mengenai Perencanaan Pendidikan</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title"><a href="">Sedia Payung Sebelum Hujan</a></h4>
            <p class="description">Artikel Pendek Mengenai Perencanaan Asuransi dan Manajemen Proteksi Resiko Keuangan</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <h4 class="title"><a href="">Senja Tidak Harus Muram, Bukan ?</a></h4>
            <p class="description">Artikel Pendek Mengenai Perencanaan Dana Pensiun</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <h4 class="title"><a href="">Bertumbuh Dan Berkembang</a></h4>
            <p class="description">Artikel Pendek Mengenai Menabung, Berinvestasi, dan Merencanakan Tujuan Keuangan</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <h4 class="title"><a href="">Menyenangkan, Mudah Dimengerti Dan Terjangkau</a></h4>
            <p class="description">Artikel Pendek Mengenai Perencanaan Keuangan dan Tinjauan Profesi Perencana Keuangan Independen</p>
          </div>

        </div>

      </div>
    </section> -->

    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section>

  </main>

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

</body>
</html>
