<?php
  $page = 'blog';
  $seo_title = 'Case Studies - Craig Baldwin';
  $title = 'Case Studies';
  $description = 'An in depth look at certain features I\'ve developed as part of the projects I\'ve worked on.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../assets/includes/head.php' ?>
    <link href="../../assets/blog.css?v=1320" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../assets/includes/header.php' ?>

      <div class="content blog">
        <?php include '../assets/includes/card.php' ?>

        <ol class="blog__list">
          <li year="2022">
            <a href="/blog/updating-args-storybook-vue">
              Dynamically updating args in Storybook from a Vue component
            </a>
          </li>

          <li year="2021">
            <a href="/blog/building-performant-colour-swatches">
              Build performant colour swatches
            </a>
          </li>

          <li year="2021">
            <a href="/blog/3d-models-ar-shopify">
              3D models and variants in Shopify
            </a>
          </li>

          <li year="2020">
            <a href="/blog/building-sofasofa">
              Building SofaSofa
            </a>
          </li>
        </ol>
      </div>
    </div>

    <?php include '../assets/includes/footer.php' ?>
  </body>
</html>
