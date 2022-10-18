<?php include "section/header.php" ?>




<?php

$id = $_GET['haberid'];


$habersor = $db->prepare('SELECT * FROM sahap WHERE id =' . $id);
$habersor->execute(array());
while ($haberyaz = $habersor->fetch(PDO::FETCH_ASSOC)) { ?>


  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1><?php echo  $haberyaz['baslik'] ?></h1>
            <div class="single_page_content"> <img class="img-center" src="uploads/<?php echo  $haberyaz['ustresim'] ?>" alt="">
              <?php echo $haberyaz['icerik1'] ?>
            </div>

            <!--
              
            <div class="related_post">
              <h2>Bunları da Sevebilirsiniz <i class="fa fa-thumbs-o-up"></i></h2>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img2.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media"> <a class="media-left" href="single_page.html"> <img src="../images/post_img1.jpg" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a> </div>
                  </div>
                </li>
              </ul>
            </div>
-->
          </div>
        </div>
      </div>
      <?php include "section/populeryazilar.php" ?>
    </div>
  <?php } ?>
  </section><?php include "section/footer.php" ?>