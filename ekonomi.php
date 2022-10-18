<?php include "section/header.php" ?>

<section id="contentSection">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="left_content">
        <div class="single_post_content">

        <?php
          $habersor = $db->prepare('SELECT * FROM sahap WHERE menu = 75 and kat1 = 21');
          $habersor->execute(array());
          while ($haberyaz = $habersor->fetch(PDO::FETCH_ASSOC)) { ?>
        
      
          <div class="single_post_content_left">
            <ul class="business_catgnav  wow fadeInDown">
              <li>
                <figure class="bsbig_fig"> <a href="<?php echo $url ?>haber/<?php echo $haberyaz['id'] ?>" class="featured_img"> <img alt="" src="<?php echo $url ?>uploads/<?php echo $haberyaz['ustresim'] ?>"> <span class="overlay"></span> </a>
                  <figcaption> <a href="<?php echo $url ?>haber/<?php echo $haberyaz['id'] ?>"><?php echo $haberyaz['baslik'] ?></a>
                </figure>
              </li>
            </ul>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
     <?php include "section/populeryazilar.php" ?>
  </div>
</section>

<?php include "section/footer.php" ?>