<?php
  $page = 'index';
  $seo_title = 'Craig Baldwin - I make websites';
  $title = 'I make websites';
  $description = 'Principal developer at the BORN Group Shopify practice, developing Shopify Plus sites and our internal framework.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include 'assets/includes/head.php' ?>
    <link href="assets/index.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include 'assets/includes/header.php' ?>

      <div class="content index">
        <div
          class="index__block block-4x3"
          style="--background: var(--color-about);"
        >
          <a href="/about">
            <strong>Over 7 years experience</strong>

            <p>I'm Craig Baldwin, principal developer at the BORN Group Shopify practice, Shopify expert, avid runner and walker, living in Winchester.</p>
          </a>
        </div>

        <div
          class="index__block block-2x1"
          style="--background: var(--color-work);"
        >
          <a href="/work">
            <strong>Launched 11 projects</strong>

            <p>And I've worked on over 50 more websites</p>
          </a>
        </div>

        <div
          class="index__block block-1x1"
          style="--background: var(--color-stats);"
        >
          <a href="/stats">
            <strong>Stats</strong>
          </a>
        </div>
      </div>
    </div>

    <?php include 'assets/includes/footer.php' ?>
  </body>
</html>
