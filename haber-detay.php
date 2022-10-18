<?php include "section/header.php" ?>




<?php
$link = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$parts = explode('/', $link);
$str = end($parts);
$id = $str;

$habersor = $db->prepare('SELECT * FROM sahap WHERE id =' . $id);
$habersor->execute(array());
while ($haberyaz = $habersor->fetch(PDO::FETCH_ASSOC)) { ?>


  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <h1><?php echo  $haberyaz['baslik'] ?></h1>
            <p><?php echo  $haberyaz['onyazi'] ?></p>
            <div class="single_page_content"> <img class="img-center" src="<?php echo $url ?>uploads/<?php echo  $haberyaz['ustresim'] ?>" alt="">
              <?php echo $haberyaz['icerik1'] ?>
            </div>
          </div>
        </div>
      </div>
      <?php include "section/populeryazilar.php" ?>
    </div>

  </section>

<?php } ?>
<?php include "section/footer.php" ?>