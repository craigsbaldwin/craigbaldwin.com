<?php
  $page = 'work';
  $seo_title = 'Work - Craig Baldwin';
  $title = 'Selected Work';
  $description = 'A selection of clients and projects I\'ve worked on, underlined titles can be clicked for more details.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../assets/includes/head.php' ?>
    <link href="../assets/work.css?v=1302" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../assets/includes/header.php' ?>

      <div class="content work">
        <?php include '../assets/includes/card.php' ?>

        <ol class="work__list">
          <li year="2025">Jewells</li>
          <li year="2025">Iron Heart <strong>*</strong></li>
          <li year="2024"><a href="/work/haynes">Haynes</a> <strong>*</strong></li>
          <li year="2024">Lyle &amp; Scott</li>
          <li year="2024">ESN</li>
          <li year="2023">Stephen Webster</li>
          <li year="2023">Grau</li>
          <li year="2023"><a href="/work/childsplay-clothing">Childsplay Clothing</a> <strong>*</strong></li>
          <li year="2022"><a href="/work/ufc">UFC</a> <strong>*</strong></li>
          <li year="2022"><a href="/work/canvas/">Canvas</a> <strong>*</strong></li>
          <li year="2021"><a href="/work/pangaia">Pangaia</a></li>
          <li year="2021"><a href="/work/tp-toys">TP Toys</a> <strong>*</strong></li>
          <li year="2020"><a href="/work/sofasofa">SofaSofa</a> <strong>*</strong></li>
          <li year="2020">Paul Valentine</li>
          <li year="2020">This Works <strong>*</strong></li>
          <li year="2020">Newbie</li>
          <li year="2019"><a href="/work/sons/">Sons</a> <strong>*</strong></li>
          <li year="2019">Crabtree &amp; Evelyn</li>
          <li year="2019">Ford Parts &amp; Accessories <strong>*</strong></li>
          <li year="2019">CLUSE</li>
          <li year="2019">Hasbro</li>
          <li year="2019">Underalls <strong>*</strong></li>
          <li year="2018"><a href="/work/direct-doors">Direct Doors</a> <strong>*</strong></li>
          <li year="2018">Lightbox</li>
          <li year="2018">Emma Bridgewater</li>
          <li year="2017">Madderson London</li>
        </ol>

        <p><strong>*</strong> Project lead</p>

        <!-- <details>
          <summary><h2>All Clients (ordered alphabetically)</h2></summary>

          <ul class="work__clients">
            <li>Bluebella</li>
            <li>Castore</li>
            <li>Childsplay Clothing</li>
            <li>CLUSE</li>
            <li>Collins</li>
            <li>Crabtree &amp; Evelyn</li>
            <li>Direct Doors</li>
            <li>Dryrobe</li>
            <li>Emma Bridgewater</li>
            <li>ESN</li>
            <li>Ford Parts &amp; Accessories</li>
            <li>Grau</li>
            <li>Hasbro</li>
            <li>Haynes</li>
            <li>Iron Heart</li>
            <li>Lightbox</li>
            <li>Lyle &amp; Scott</li>
            <li>Madderson London</li>
            <li>Newbie</li>
            <li>Newbie</li>
            <li>Nilfisk</li>
            <li>Pangaia</li>
            <li>Paul Valentine</li>
            <li>Petrossian</li>
            <li>Pure Electric</li>
            <li>SofaSofa</li>
            <li>Sons</li>
            <li>Stephen Webster</li>
            <li>This Works</li>
            <li>TP Toys</li>
            <li>UFC</li>
            <li>Veronica Beard</li>
            <li>Vollebak</li>
          </ul>
        </details> -->
      </div>
    </div>

    <?php include '../assets/includes/footer.php' ?>
  </body>
</html>
