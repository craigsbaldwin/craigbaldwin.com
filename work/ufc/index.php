<?php
  $page = 'work';
  $seo_title = 'UFC - Craig Baldwin';
  $title = 'UFC';
  $description = '';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/work.css?v=1320" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content work work-entry">
        <?php include '../../assets/includes/card.php' ?>

        <p>Principal developer supporting development team using <a href="../work/canvas">Canvas</a> for the first time on a client project. Later provided additional development support by building a custom gift with purchase feature that provided a client configurable gift with purchase experience.</p>

        <p>Lessons gathered from this project helped improve later versions of Canvas.</p>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
