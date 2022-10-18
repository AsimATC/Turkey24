<?php include "section/db.php" ?>


<?php


$ayarsor = $db->prepare('SELECT * FROM ayarlar LIMIT 1');
$ayarsor->execute(array());
while ($ayaryaz = $ayarsor->fetch(PDO::FETCH_ASSOC)) {

  $mail = $ayaryaz['mail'];
  $adres = $ayaryaz['adres'];
  $whatsapp = $ayaryaz['whatsapp'];
  $cep = $ayaryaz['cep'];

  $slogan = $ayaryaz['slogan'];
  $maps = $ayaryaz['maps'];

  $facebook = $ayaryaz['facebook'];
  $instagram = $ayaryaz['instagram'];
  $twitter = $ayaryaz['twitter'];
  $youtube = $ayaryaz['youtube'];
  
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Turkey24</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="assets/css/font.css">
  <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="shortcut icon" type="image/png" href="images/Turkey24.png">
  <!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <!-- preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- wrapper start -->
  <div class="container">

    <!-- header Start -->
    <header id="header">
      <div class="row">
      </div>
    </header>

    <!-- Logo -->
    <section><img style="
      height: 180px;
      display: block;
      margin-left: auto;
      margin-right: auto;" src="images/Turkey24.png" alt="">
    </section>

    <!-- Menu Start -->
    <section id="navArea">
      <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav main_nav">
            <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span>
                <span class="mobile-show"></span></a></li>
            <li><a href="rusya-haber.php">Rusya Ukrayna</a></li>
            <li><a href="gundem.php">GÜNDEM</a></li>
            <li><a href="ekonomi.php">EKONOMİ</a></li>
            <li><a href="dunya.php">DÜNYA</a></li>
            <li><a href="demokrasi.php">demokrasi</a></li>
            <li><a href="covid.php">covid</a></li>
            <li><a href="yazarlar.php">YAZARLAR</a></li>
          </ul>
        </div>
      </nav>
    </section>