<?php
  $page = 'about';
  $seo_title = 'About - Craig Baldwin';
  $title = 'Hello';
  $description = 'I\'m Craig Baldwin, principal developer at BORN Group, Shopify expert, avid runner and walker, living in Winchester.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../assets/includes/head.php' ?>
    <link href="../assets/about.css?v=1302" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../assets/includes/header.php' ?>

      <div class="content about">
        <?php include '../assets/includes/card.php' ?>

        <p>I've worked at the <a href="https://borngroup.com/">BORN Group Shopify practice</a> (originally We Make Websites) for over seven years, specialising in the front-end development of Shopify e-commerce stores. I'm a principal developer, working on key client accounts as well as developing our internal framework and compiler. I've led the development and launch of 11 projects and supported the development of over 50 more.</p>

        <!-- Iron Heart, Haynes, Childsplay Clothing, UFC Store, TP Toys, SofaSofa, This Works, Sons, Autonative (Ford), Underalls, Direct Doors -->

        <p>I enjoy technically challenging tasks which require complex logical problem solving and I have a tendency towards perfectism in my code. My background in Graphic Design means I have an attention for detail and an eye for design.</p>

        <h2 id="languages">Languages</h2>

        <ul>
          <li>CSS</li>
          <li>GraphQL</li>
          <li>HTML</li>
          <li>JSON</li>
          <li>Liquid</li>
          <li>Node.js</li>
          <li>PHP</li>
          <li>SCSS</li>
          <li>Vanilla JavaScript</li>
          <li>Vue.js</li>
          <li>Web Components</li>
        </ul>

        <h2 id="tools">Tools</h2>

        <ul>
          <li>Bitbucket</li>
          <li>Browsersync</li>
          <li>Figma</li>
          <li>Git</li>
          <li>GitHub</li>
          <li>Google Workspace</li>
          <li>Jira</li>
          <li>Notion</li>
          <li>Shopify CLI</li>
          <li>Slack</li>
          <li>Theme Kit</li>
          <li>VS Code</li>
          <li>Webpack</li>
        </ul>

        <h2>Responsibilities</h2>
        <p>As a principal developer my responsibilities include company development standards, tools, and documentation with a shared responsibility for code quality, excellence of technical solutions, and helping to drive best-in-class development.</p>

        <p>Day-to-day I work on key client accounts either building advanced features, supporting BORN's team of developers, or working with project managers and product owners to refine client requirements.</p>

        <p>I also lead the development of Canvas, our internal framework, and Basis, its Webpack-powered compiler. Both have been built from scratch by myself to provide the most performant stores and the best developer experience.</p>

        <h2 id="experiences">Experience</h2>
        <p>Graduated with a BA (Hons) degree in Graphic Design and Photography from the <a href="http://www.southampton.ac.uk/wsa/index.page">Winchester School of Art</a> in 2010. In 2017 started working at We Make Websites as a front-end developer. Previously worked for Intermedia Solutions for six years; a print and digital marketing agency. For more details view my <a href="http://uk.linkedin.com/in/craigbaldwin/">LinkedIn</a> page.</p>

        <h2 id="personal">Personal</h2>
        <p>In my spare time I enjoy <a href="https://www.strava.com/athletes/craigbaldwin">running, swimming, cycling, and walking</a>. I liked to keep track of <a href="/stats">all my stats</a>. I'm most at home on the fells of the Lake District which I try to visit as often as possible. I hope to one day have climbed <a href="/stats#mountains">all 214 fells</a> described by Alfred Wainwright.</p>
      </div>
    </div>

    <?php include '../assets/includes/footer.php' ?>
  </body>
</html>
