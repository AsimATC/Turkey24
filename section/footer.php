</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="images/Turkey24.png" alt="" class="w-100">
        <span><?php echo  $slogan  ?></span>
      </div>
      <div class="col-md-3">
        <h3 class="font-weight-bold">
          Hızlı Link
        </h3>
        <ul>
          <li><a href="rusya-haber.php">rusya Ukrayna</a></li>
          <li><a href="gundem.php">Gündem</a></li>
          <li><a href="ekonomi.php">Ekonomi</a></li>
          <li><a href="ekonomi.php">Dünya</a></li>
          <li><a href="demokrasi.php">Demokrasi</a></li>
          <li><a href="covid.php">Covid</a></li>
          <li><a href="yazarlar.php">Yazarlar</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3 class="font-weight-bold">
          Son Yazılanlar
        </h3>
        <ul>
          <?php

          $sorhaber = $db->prepare('SELECT * FROM sahap WHERE menu = 75 ORDER BY tarih DESC LIMIT 7');
          $sorhaber->execute(array());
          while ($yazhaber = $sorhaber->fetch(PDO::FETCH_ASSOC)) { ?>

            <li><a class="footer-news" href="haber-detay.php?haberid=<?php echo $yazhaber['id'] ?>"><?php echo $yazhaber['baslik'] ?></a></li>
          <?php } ?>
        </ul>
      </div>
      <div class="col-md-3">
        <h3 class="font-weight-bold">
          İletişim
        </h3>
        <span><?php echo  $adres  ?></span> <br>
        <span> Tel : <?php echo  $cep  ?></span> <br>
        <span>Mail : <?php echo  $mail  ?></span>
      </div>

    </div>
    <hr>
    <div class="row">
    <div class="col-12 text-center">
        <div class="copyright mb-5">
          Tüm Haklar Saklıdır <a href="basarimweb.com" class="">basarimweb.com</a>
        </div>
        <br>
    </div>
  </div>
  </div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>