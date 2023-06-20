<?php

$video = $page->video()->toFile();
$image = $page->image();
?>

<?php snippet('header') ?>
<?= css([
  'assets/css/secret-sauce-single.css',
]) ?>

<section id="secret-sauce_single">
  <div class="left-side">

    <div class="content content-secret-sauce-single ">
      <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
      <div class="cont">
        <h2><?= $page->sub_title()->text() ?></h2>
        <h1><?= $page->title_sauce_single()->text() ?></h1>
        <h3><?= $page->sub_title_2()->text() ?></h3>

        <div class="video-block hide-desktop">
          <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">

          <button type="button" class="button-play-video">
            <?= svg('assets/icons/play-video.svg') ?>
          </button>


        </div>

        <div class="wysiwyg-block">
          <?= $page->textarea()->text()->kt() ?>
        </div>


      </div>
    </div>
    <div class="etic-links">


      <ul>
        <?php foreach ($page->parent()->children() as $subpage):

          if (html($subpage->title()) == "Entrepreneurship") {
            $small = "E";
          } else if (html($subpage->title()) == "Communication") {
            $small = "C";
          } else {
            $small = "TI";
          }
          ?>

          <?php if ($page->url() === $subpage->url()) {

          ?>


          <li>
            <a class="active" href="<?= $subpage->url() ?>" data-small="<?= $small ?>"
               data-big="<?= $subpage->title() ?>"
               title="<?= $subpage->title() ?>">
              <div>
                <?= svg('assets/icons/arrow-right.svg') ?>
              </div>
              <span><?= html($subpage->title()) ?></span>
            </a>


          </li>
        <?php } else {

          ?>

          <li>
            <a href="<?= $subpage->url() ?>" title="<?= $subpage->title() ?>" data-small="<?= $small ?>"
               data-big="<?= $subpage->title() ?>">

              <?php
              echo $small;
              ?>


            </a>
          </li>
        <?php } ?>
        <?php endforeach ?>


      </ul>
    </div>
  </div>


  <div class="video-block hide-mobile">
       <?= $image->thumb() ?>


    <button type="button" class="button-play-video">
      <?= svg('assets/icons/play-video.svg') ?>
    </button>


  </div>
  <div class="open-video">
    <button id="close-video"> <?= svg('assets/icons/close-white.svg') ?></button>
    <video controls id="myVideo" controlsList="nodownload noplaybackrate" disablePictureInPicture>
      <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
    </video>
  </div>


</section>

<?php


snippet('footer');

echo js([
  'assets/js/video.js',
  'assets/js/etic-buttons.js'
]);
?>

