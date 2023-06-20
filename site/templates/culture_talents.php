<?php

$image = $page->image();



?>

<?php snippet('header') ?>
<?= css([
  'assets/css/culture.css',
]) ?>

<section id="culture">
  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_culture()->text() ?></h1>
      <div>
        <?= $page->textarea()->text()->kt() ?>
      </div>
    </div>
  </div>

  <div class="image-block">

    <img style="z-index: 2" src="<?php echo kirby()->urls()->assets() . '/images/jungle.png' ?>" alt="Welcome to the jungle">

    <img class="background" src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">


    <?php if ($page->link()){

      $link = $page->link()->toLinkObject();

      ?>
    <a style="z-index: 1" href="<?= $link->value() ?>" <?php if ($link->popup()){ echo 'target=\'_blank\'';} ?> class="btn rounded-button no-fade">
      <?= svg('assets/icons/arrow-right.svg') .  $link->text() ?>
    </a>

      <?php } ?>
  </div>


</section>

<?php snippet('footer') ?>

