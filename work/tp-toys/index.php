<?php
  $page = 'work';
  $seo_title = 'TP Toys - Craig Baldwin';
  $title = 'TP Toys';
  $description = '';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/work.css?v=1311" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content work work-entry">
        <?php include '../../assets/includes/card.php' ?>

        <p>Principal developer leading four developers on a build with an extremely tight turnaround.</p>

        <p>Notable features include 3D AR model viewer for products with seamless variant switching and advanced multi-step product builder that updates the 3D model as you build your product.</p>

        <div class="work-entry__links">
          <ul>
            <li><a href="/blog/3d-models-ar-shopify">View case study</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
