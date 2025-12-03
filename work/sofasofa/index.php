<?php
  $page = 'work';
  $seo_title = 'SofaSofa - Craig Baldwin';
  $title = 'SofaSofa';
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

        <p>Senior developer working in close partnership with the project's designer to launch a technically challenging re-branded website with a tight focus on user experience.</p>

        <p>Headline features include interactive sofa finder, sample swatch requests, and material protection service powered by Vue components. Particularly proud of the attention to detail throughout the site including numerous micro-animations.</p>

        <div class="work-entry__links">
          <ul>
            <li><a href="/blog/building-sofasofa">View case study</a></li>
            <li><a href="https://sofasofa.co.uk/">View SofaSofa website</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
