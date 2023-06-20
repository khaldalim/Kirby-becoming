

<?php snippet('header') ?>

<?= css([
  'assets/css/jeu.css',
]) ?>

<section id="jeu">

  <lottie-player src="<?php echo asset("assets/lottie/Cartes.json") ?>"  background="transparent"  speed="1"  style="width: 1080px;position: absolute;right:0; top: 0;"  loop  autoplay></lottie-player>

  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_jeu()->text() ?></h1>
      <div class="wysiwyg">
        <?= $page->textarea()->text()->kt() ?>
      </div>
    </div>
  </div>
  <div class="image-block">




  </div>



</section>

<?php snippet('footer') ?>

