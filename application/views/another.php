<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>
  <?php include("header.php") ?>
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-custom" style="display: flex;">
    <div class="container" style="display: flex;">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" style="display:flex; position: absolute; left:20px; top:1%">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">E-hotel</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-expand" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right " style="display: flex !important;">
          <li><a href="#home">Home</a></li>
          <li><a href="<?= site_url("Welcome") ?>">signup</a></li>
          <li><a href="<?= site_url("Welcome/login") ?>">signin</a></li>
          <!-- <li><a href="#contact">Contact</a></li> -->``
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>

  <!-- /HOME -->
  <section class="main-home" id="home">
    <div class="home-page-photo"></div> <!-- Background image -->
    <div class="home__header-content">
      <div id="main-home-carousel" class="owl-carousel">
        <div>
          <h1 class="intro-title">Book your Hotel</h1>
          <p class="intro-text">there is easy checkout and checkin. you can book your hotel where you are and every time</p>
          <a class="btn btn-custom" href=" <?= site_url('Welcome') ?>">Get started</a>
        </div>
        <!--slide item like paragraph-->
      </div>
    </div>
  </section>
  <!-- /End HOME -->

  <!-- / SERVICES -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="title text-center">Services we offer</h3>
          <div class="titleHR"><span></span></div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border">
                <i class="icon-design-graphic-tablet-streamline-tablet color-l-orange"></i>
              </div>
              <h5>checkIn and checkOut date</h5>
              <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border">
                <i class="icon-design-pencil-rule-streamline color-l-blue"></i>
              </div>
              <h5>pickup if u want</h5>
              <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border">
                <i class="icon-speech-streamline-talk-user color-l-yellow"></i>
              </div>
              <h5>special requests</h5>
              <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/.row -->

      <div class="row">
        <div class="col-sm-4">
          <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border">
                <i class="icon-settings-streamline-2 color-l-purple"></i>
              </div>
              <h5>childrens and parent rooms</h5>
              <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border">
                <i class="icon-streamline-umbrella-weather color-l-pink"></i>
              </div>
              <h5>rooms for meetings</h5>
              <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <!-- Service-item -->
          <div class="text-center services-item">
            <div class="col-wrapper">
              <div class="icon-border">
                <i class="icon-caddie-shopping-streamline color-l-green"></i>
              </div>
              <h5>Full service</h5>
              <p>Nulla vitae libero pharetra augue. Etiam porta malesuada magna mollis euismod consectetur sem urdom tempus porttitor.</p>
            </div>
          </div>
        </div>
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </section>
  <footer id="footer">
    <div class="footer-widgets-wrap">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-4 col-md-4">
            <div class="footer-content">
              <h4>KEEP IN TOUCH</h4>
              <div class="footer-socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </div> <!-- end footer-content -->
          </div> <!-- end col-sm-4 -->
          <div class="col-sm-4 col-md-4">
            <div class="footer-content">
              <h4>ADDRESS</h4>
              <p>kk509, Kicukir<br>
                Near kicukiro centre</p>
              <p>+250788737431<br>
                <a href="#">www.E-hotel.com</a><br>
                info@e-hotel.com
              </p>
            </div> <!-- end footer-content -->
          </div> <!-- end col-sm-4 -->
          <div class="col-sm-4 col-md-4">
            <div class="footer-content">
              <h4>SUPPORT</h4>
              <p>You need support? Visit our support forum and open tickets for you questions.</p>
              <p><button type="button" class="btn btn-custom-sm">forum</button></p>
            </div> <!-- end footer-content -->
          </div> <!-- end col-sm-4 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </div>
    <div class="footer-bottom text-center">
      <!-- Footer-copyright -->
      <p>copyright &copy; E-hotel 2021</p>
    </div>
  </footer>
  <?php include("footer.php")  ?>
</body>

</html>