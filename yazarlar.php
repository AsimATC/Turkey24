<?php include "section/header.php" ?>

<section>
  <?php
  $ekipsor = $db->prepare('SELECT * FROM sahap WHERE menu = 73');
  $ekipsor->execute(array());
  while ($ekipyaz = $ekipsor->fetch(PDO::FETCH_ASSOC)) { ?>
    <img style="height: 300px; padding-bottom: 50px; display: inline; padding-right: 30px;" src="uploads/<?php echo $ekipyaz['ustresim'] ?>" alt="">
    <h2 style="display: inline;"><?php echo $ekipyaz['baslik'] ?></h2>
    <br>
    <br>
  <?php } ?>

</section>

<?php include "section/footer.php" ?>