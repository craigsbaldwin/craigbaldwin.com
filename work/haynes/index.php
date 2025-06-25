<?php
  $page = 'work';
  $seo_title = 'Haynes - Craig Baldwin';
  $title = 'Haynes';
  $description = '';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/work.css?v=1310" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content work work-entry">
        <?php include '../../assets/includes/card.php' ?>

        <p>Developed approach and built global vehicle search, garage, and compatibility functionality that's used as a cornerstone of Haynes' online business strategy.</p>

        <p>Built using a combination of external APIs for VRM and VIN search with in-depth product metafield data to store user's vehicle in a garage and easily show compatible products based on vehicle and product properties. Make/Model/Year dropdown search powered using novel approach to implementing Shopify Search & Discovery filters and product metafield data.</p>

        <p>Later supported launch of Australia and United States stores as original project lead developer left.</p>

        <div class="work-entry__links">
          <ul>
            <li><a href="https://au.haynes.com/">View Haynes website</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
