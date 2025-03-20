<?php
  $page = 'info';
  $seo_title = 'Info - Craig Baldwin';
  $title = 'Info';
  $description = 'You are viewing version 13.0.1 of the site.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/info.css" rel="stylesheet" />
    <script src="../assets/time-since.js" async></script>
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content info">
        <?php include '../../assets/includes/card.php' ?>

        <p>Version 13 has been online for <time-since date="2025-03-20">0 years</time-since>. It was launched on 20/03/2025.</p>

        <h2>Changelog</h2>
        <p>To see the changelog visit the <a href="https://github.com/craigsbaldwin/craigbaldwin.com/blob/master/CHANGELOG.md">GitHub repo</a>.</p>

        <h2>Tech stack</h2>
        <p>This site has been built from scratch with no build tool, I intentionally sought a minimal development experience using browser-native features. It has been developed using PHP, CSS, and web components. The font used is <a href="https://fonts.google.com/specimen/Inconsolata">Inconsolata</a>. The source code can be viewed on <a href="https://github.com/craigsbaldwin/craigbaldwin.com">GitHub</a>.</p>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
