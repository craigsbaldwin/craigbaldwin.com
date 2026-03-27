<?php
  $page = 'index';
  $seo_title = 'Craig Baldwin - I make websites';
  $title = 'I make websites';
  $description = 'Senior Developer at By Association Only and Shopify expert, developing Shopify Plus stores.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include 'assets/includes/head.php' ?>
    <link href="assets/index.css?v=1330" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include 'assets/includes/header.php' ?>

      <div class="content indexV2">
        <p><strong>I'm Craig Baldwin, I make websites.</strong></p>

        <p>I'm a <a class="indexV2__about" href="/about">Senior Developer</a> at By Association Only and a Shopify expert who's worked on <a class="indexV2__work" href="/work">dozens of Shopify projects</a>. Previously I was Principal Developer at We Make Websites. I'm also an avid <a class="indexV2__stats" href="/stats">runner, walker, and cyclist</a>.</p>
      </div>
    </div>

    <?php include 'assets/includes/footer.php' ?>
  </body>
</html>
