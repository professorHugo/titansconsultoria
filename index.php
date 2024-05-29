<?php
  session_start();
  require 'config/configuracoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="google-site-verification" content="C7MQlopL4sveqW9B5f-dnfQPg-C0Ywx0_QD7hmdkM68" />

  <title>Titans Consultoria Empresarial <?= $_SESSION['Version'] ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <?php include "containers/Favicon.php"?>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <?php include "containers/Header.php";?>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <h1 id="heading-title">Titans</h1>
      <h3><strong>Consultoria Empresarial</strong></h3>
      <h2 style="width: 70%;">
        Com foco em aumentar faturamento e produtividade sem perder lucratividade
      </h2>
      <a href="#about" class="btn-get-started scrollto">Saber Mais</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <?php include "containers/About.php";?>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <?php include "containers/Services.php";?>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <?php include "containers/Features.php" ?>
    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <?php include "containers/Call-To-Action.php";?>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Veja nosso <span>Portfolio</span></h3>
          <p>
            Quer conferir nossos trabalhos? Dá uma olhada no que já oferecemos aos nossos clientes.
          </p>
        </div>

        <div class="row">
          <?php include "containers/Portifolio-Selector.php";?>
        </div>

        <div class="row portfolio-container">

          <?php
          include_once "containers/filter-app.php";
          include_once "containers/filter-card.php";
          include_once "containers/filter-web.php";
          ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <?php include "containers/FAQ.php"?>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <?php //include "containers/Team.php"?>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <?php include "containers/Contact.php"?>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php include "containers/Footer.php"?>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/index.js"></script>

</body>

</html>