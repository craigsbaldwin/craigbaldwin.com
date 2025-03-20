<?php
  $page = 'work';
  $seo_title = 'Canvas - Craig Baldwin';
  $title = 'Canvas';
  $description = '';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../../assets/includes/head.php' ?>
    <link href="../../assets/work.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../../assets/includes/header.php' ?>

      <div class="content work work-entry">
        <?php include '../../assets/includes/card.php' ?>

        <p>Lead developer and architect of the custom company framework called Canvas. Canvas is a Vue-based development environment used as We Make Websites' primary approach for Liquid-based development, it has now been used on over 30 projects.</p>

        <p>Canvas is supported by a custom Webpack-based compiler called Basis and a suite of dependencies called Brush, each designed to extend the functionality of Canvas and Basis.</p>

        <p>My responsibilities include the original development of Canvas, Basis, and Brush from scratch, and the continued development and support of all parts of the company development ecosystem.</p>

        <h2>Headline features include:</h2>

        <ul>
          <li>Just in time asynchronous Vue component loading for improved performance</li>
          <li>Browsersync-based localhost development environment with hot module replacement</li>
          <li>Section and settings schemas stored as separate JS files with re-usable fragments</li>
          <li>Automated Vue to Liquid template conversion</li>
          <li>First class support for Liquid locale strings using the global <code>$string()</code> helper function</li>
          <li>Design tool to automatically convert Figma tokens into CSS variables and text classes</li>
          <li>Synchronised Figma design system to accelerate designer workflow</li>
          <li>Lightweight GraphQL compiler and query function designed for Shopify's storefront API</li>
          <li>Nested folder structure support and self-contained component folders</li>
          <li>SVG icons folder automatically compiled into Liquid snippets with inline stylesheet support</li>
          <li>Component CLI tool to scaffold component folder and files automatically</li>
          <li>Automatic creation of critical CSS Liquid snippets based on SCSS stylesheets</li>
          <li>Library of pre-made components installed as packages to help jumpstart development</li>
          <li>Storybook support for Vue component and helper preview</li>
          <li>First class web component support</li>
        </ul>
      </div>
    </div>

    <?php include '../../assets/includes/footer.php' ?>
  </body>
</html>
