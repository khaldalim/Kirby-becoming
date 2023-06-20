<style>
  body {
    height: inherit !important;
  }
</style>

<?php


if (!isset($_COOKIE['Intro'])) {
  $timeout = 6000;
  setcookie("Intro", 1, time() + 86400);  /* expire dans 24 heures */
  ?>

  <div id="intro">

    <lottie-player src="<?php echo asset("assets/lottie/LogoBecoming.json") ?>"
                   background="transparent" speed="1" autoplay></lottie-player>

  </div>

  <script>
    setTimeout(function () {
      $("#intro").fadeOut(), $("#homepage video")[0].play()
    }, <?= $timeout ?>);
  </script>


  <style>
    .links a:first-child, .social a:nth-child(4), a.logo, header .burger span:first-child:after, header .burger .menu-icon span:first-of-type {
      animation-delay: <?= $timeout + 100 ?>ms !important
    }

    .links a:nth-child(2) {
      animation-delay: <?= $timeout + 400 ?>ms !important
    }

    .links div {
      animation-delay: <?= $timeout + 700 ?>ms !important
    }

    .social a:first-child {
      animation-delay: <?= $timeout + 1000 ?>ms !important
    }



    .social a:nth-child(3), header .burger span:nth-child(2):after, header .burger .menu-icon span:last-of-type {
      animation-delay: <?= $timeout + 500 ?>ms !important
    }


    #homepage .content .home-links a:first-child div.main-link-container, #homepage .content .home-links a:first-child div.main-link-container:after, .social a:nth-child(2) {
      animation-delay: <?= $timeout + 800 ?>ms !important
    }

    #homepage .content .home-links a:nth-child(2) div.main-link-container, #homepage .content .home-links a:nth-child(2) div.main-link-container:after {
      animation-delay: <?= $timeout + 1100 ?>ms !important
    }

    #homepage .content .home-links a:nth-child(3) div.main-link-container, #homepage .content .home-links a:nth-child(3) div.main-link-container:after {
      animation-delay: <?= $timeout + 1400 ?>ms !important
    }

    #homepage .content .home-links a:nth-child(4) div.main-link-container {
      animation-delay: <?= $timeout + 1700 ?>ms !important
    }
  </style>

<?php } ?>



<?php snippet('header') ?>

<?= css([
  'assets/css/home.css',

]) ?>
<?php

$video = $page->video()->toFile();
$poster = $page->poster()->toFile();

?>

<section id="homepage">
  <h1 style="display: none;">.becoming</h1>
  <video poster="<?php echo $poster->url(); ?>" <?php if (isset($_COOKIE['Intro'])) { ?> autoplay  <?php } ?> muted loop
         id="myVideo">
    <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
    Your browser does not support the video tag.
  </video>

  <?php
  $pages = $page->pages()->related()->toPages();

  ?>

  <!-- Optional: some overlay text to describe the video -->
  <div class="content">
    <div class="home-links">
      <?php
      foreach ($pages as $page) {
        ?>
        <a href="<?= $page->url() ?>">
          <div title="<?= $page->title() ?>" class="main-link-container">

            <h2><?= $page->title() ?></h2>

          </div>
        </a>
      <?php } ?>
    </div>
</section>


<?php snippet('footer') ?>

