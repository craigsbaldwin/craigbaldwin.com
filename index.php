<?php
  $page = 'index';
  $seo_title = 'Craig Baldwin - I make websites';
  $title = 'I make websites';
  $description = 'Principal developer at the BORN Group Shopify practice, Shopify expert, developing Shopify Plus sites and our internal framework.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include 'assets/includes/head.php' ?>
    <link href="assets/index.css?v=1302" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include 'assets/includes/header.php' ?>

      <div class="content indexV2">
        <p><strong>I'm Craig Baldwin, I make websites.</strong></p>

        <p>I'm the <a class="indexV2__about" href="/about">principal developer</a> at the BORN Group Shopify practice. I've led the <a class="indexV2__work" href="/work">launch of 11 projects</a>. I'm also a Shopify expert, avid <a class="indexV2__stats" href="/stats">runner, walker, and cyclist</a>, and I live in Winchester.</p>
    </div>

    <?php include 'assets/includes/footer.php' ?>
  </body>
</html>
