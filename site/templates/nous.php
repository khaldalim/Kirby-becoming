<?php
$video = $page->video()->toFile();
$image = $page->image();
?>

<?php snippet('header') ?>
<?= css([
  'assets/css/nous.css',
]) ?>

<section id="nous">
  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_nous()->text() ?></h1>



      <div>
        <?= $page->textarea()->text()->kt() ?>
      </div>
    </div>
  </div>
  <div class="video-block ">
    <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">

    <button class="button-play-video" type="button">
      <?= svg('assets/icons/play-video.svg') ?>
    </button>


  </div>
  <div class="open-video">
    <button id="close-video"><?= svg('assets/icons/close-white.svg') ?></button>
    <video controls id="myVideo" controlsList="nodownload noplaybackrate" disablePictureInPicture >
      <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
    </video>
  </div>


</section>

<?php

snippet('footer');
echo js([
  'assets/js/video.js'
]);
?>

