<?php
  $page = 'work';
  $seo_title = 'Pangaia - Craig Baldwin';
  $title = 'Pangaia';
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

        <p>Principal developer responsible for re-development of Pangaia store. Maintained code quality of two developers, an external agency, and Pangaia's internal developer whilst in frequent contact with Pangaia's key stakeholders to help launch new features.</p>

        <p>Launched redesigned header, mobile menu and cart drawer, homepage, product page, and collection page with complex Algolia, Nosto, and dynamic Shopify integrations.</p>

        <p>Won Shopify's 2020 <a href="https://www.shopify.co.uk/partners/blog/shopify-commerce-awards-2020-winners#store-rebuild">best store rebuild award</a>.</p>

        <div class="work-entry__links">
          <ul>
            <li><a href="/blog/building-performant-colour-swatches">View case study</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
