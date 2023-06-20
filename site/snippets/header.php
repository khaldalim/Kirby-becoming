<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html <?= site()->langAttr() ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php snippet('meta_information'); ?>


  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <?= css([
    'assets/css/style.css'
  ]) ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>


<body>

<header class="header">
  <a class="logo" title="becoming" href="<?= $site->url(); ?>">
    <lottie-player id="header-lottie" src="<?php echo asset("assets/lottie/LogoBecoming.json") ?>" style="height: 41px;"
                   background="transparent" speed="1" loop autoplay></lottie-player>

    <!--      .Becoming<sup>©</sup>-->
  </a>



    <div class="burger">
      <div class="menu-icon">
        <input id="burger-menu-icon" class="menu-icon__cheeckbox " type="checkbox" />
        <div>
          <span></span>
          <span></span>
        </div>
      </div>


</header>
<button type="button" class="back-button" data-href="<?php if ($page->parent()) {
  echo $page->parent()->url();
} else {
  echo $site->url();
} ?>">
  <?= svg('assets/icons/arrow-back.svg') ?>
</button>

<?php snippet('burger-menu');


?>

<main class="main">



