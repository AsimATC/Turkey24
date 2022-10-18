<div class="col-lg-4 col-md-4 col-sm-4">
  <aside class="right_content">
    <div class="single_sidebar">
      <h2><span>Popüler Yazılar</span></h2>
      <ul class="spost_nav">
        <?php
        $populeryazi = $db->prepare('SELECT * FROM sahap WHERE menu = 75 and kat1 = 25');
        $populeryazi->execute(array());
        while ($populeryaz = $populeryazi->fetch(PDO::FETCH_ASSOC)) { ?>

          <li>
            <div class="media"> <a href="haber-detay.php?haberid=<?php echo $populeryaz['id'] ?>" class="media-left"> <img alt="" src="uploads/<?php echo $populeryaz['ustresim'] ?>"> </a>
              <div class="media-body"> <a href="haber-detay.php?haberid=<?php echo $populeryaz['id'] ?>" class="catg_title"> <?php echo $populeryaz['baslik'] ?></a> </div>
            </div>
          </li>
        <?php } ?>

      </ul>
    </div>
  </aside>
</div>