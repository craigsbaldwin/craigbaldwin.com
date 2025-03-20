<?php
  $page = '404';
  $seo_title = 'Craig Baldwin - 404';
  $title = '404';
  $description = 'Something\'s gone wrong.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include 'assets/includes/head.php' ?>
  </head>

  <body>
    <div class="container">
      <?php include 'assets/includes/header.php' ?>

      <div class="content 404">
        <?php include '../assets/includes/card.php' ?>
      </div>
    </div>

    <?php include 'assets/includes/footer.php' ?>
  </body>
</html>
