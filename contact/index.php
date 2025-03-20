<?php
  $page = 'contact';
  $seo_title = 'Contact - Craig Baldwin';
  $title = 'Get in touch';
  $description = 'I\'m currently working full-time at BORN Group but if you have something interesting then use the details below to get in touch.';
?>

<html lang="en">
  <head>
    <title><?php echo $seo_title ?></title>
    <?php include '../assets/includes/head.php' ?>
    <link href="../assets/contact.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container">
      <?php include '../assets/includes/header.php' ?>

      <div class="content contact">
        <?php include '../assets/includes/card.php' ?>

        <p>Do not get in touch about job opportunities at BORN Group or Tech M.</p>

        <ul>
          <li><a href="mailto:craigsbaldwin@gmail.com">Email</a> - I check it occassionally</li>
          <li><a href="https://daytum.com/CraigBaldwin">Daytum</a> - statistics 2009-2024</li>
          <li><a href="https://github.com/craigsbaldwin">GitHub</a> - personal coding projects</li>
          <li><a href="https://www.instagram.com/craigsbaldwin/">Instagram</a> - photos from my wanders</li>
          <li><a href="https://www.last.fm/user/CSBrightside">Last.fm</a> - music listening habits</li>
          <li><a href="https://uk.linkedin.com/in/craigbaldwin/">LinkedIn</a> - professional networking</li>
          <li><a href="https://www.strava.com/athletes/craigbaldwin">Strava</a> - running, swimming, cycling, and walking</li>
        </ul>
      </div>
    </div>

    <?php include '../assets/includes/footer.php' ?>
  </body>
</html>
