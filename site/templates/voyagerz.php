

<?php snippet('header') ?>

<?= css([
  'assets/css/voyagerz.css'
]) ?>

<section id="voyagerz">
  <lottie-player id="voyagerz-back" src="<?php echo asset("assets/lottie/MASTER_FOND.json") ?>" style="width: 100vw"
                 background="transparent" speed="1" loop autoplay></lottie-player>

  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_voyagerz()->text() ?></h1>
      <div>
        <?= $page->textarea()->text()->kt() ?>

            </div>
    </div>
  </div>
  <div class="image-block">

    <?=  svg('assets/icons/v2_1.svg') ?>

  </div>



</section>

<?php snippet('footer') ?>

