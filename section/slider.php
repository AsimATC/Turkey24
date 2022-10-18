<section id="sliderSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="slick_slider">

        <?php
        $slidersor = $db->prepare('SELECT * FROM sahap WHERE menu = 74');
        $slidersor->execute(array());
        while ($slideryaz = $slidersor->fetch(PDO::FETCH_ASSOC)) { ?>

          <!-- Slider item -->
          <div class="single_iteam"> <a href="haber-detay.php?haberid=<?php echo $slideryaz['id'] ?>"> <img src="uploads/<?php echo $slideryaz['ustresim'] ?>" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="haber-detay.php?haberid=<?php echo $slideryaz['id'] ?>"> <?php echo $slideryaz['baslik'] ?></a></h2>

            </div>
          </div>
        <?php } ?>

      </div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
      <div class="latest_post">
        <h2><span>Son Yazılar</span></h2>
        <div class="latest_post_container">
          <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
          <ul class="latest_postnav">
            <?php
            $sonyazisor = $db->prepare('SELECT * FROM sahap WHERE menu = 75 and kat1 = 18');
            $sonyazisor->execute(array());
            while ($sonyaziyaz = $sonyazisor->fetch(PDO::FETCH_ASSOC)) { ?>

              <li>
                <div class="media"> <a href="haber-detay.php?haberid=<?php echo $sonyaziyaz['id'] ?>" class="media-left"> <img alt="" src="uploads/<?php echo $sonyaziyaz['ustresim'] ?>"> </a>
                  <div class="media-body"> <a href="haber-detay.php?haberid=<?php echo $sonyaziyaz['id'] ?>" class="catg_title"> <?php echo $sonyaziyaz['baslik'] ?></a> </div>
                </div>
              </li>
            <?php } ?>
          </ul>
          <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
        </div>
      </div>
    </div>
  </div>
</section>