<?php
snippet('header');
$image = $page->image();
?>

<?= css([
  'assets/css/faire-mieux.css',
]) ?>

<section id="faire-mieux">
  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_mieux()->text() ?></h1>
      <div class="wysiwyg">
        <?= $page->textarea()->text()->kt() ?>
      </div>
    </div>
  </div>
  <div class="image-block" style="background-color: #EAE9E4">

<?php if ($image){ ?>
    <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">
    <?php } ?>
  </div>



</section>

<?php snippet('footer') ?>

