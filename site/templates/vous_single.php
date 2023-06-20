<?php snippet('header') ?>

<?= css([
  'assets/css/vous-single.css',
]) ?>


<section id="vous-single">


  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>


    <div class="pub-left-container">

      <div>

        <div class="cont">
          <h3><?= $page->sub_title() ?></h3>


          <h1><?= $page->title_vous_single() ?></h1>
          <h2><?= $page->type_vous_single() ?></h2>
          <div class="wysiwyg">
            <?= $page->textarea()->text()->kt() ?>
          </div>


        </div>
        <div class="etic-links">


          <ul>
            <?php

            foreach ($page->categories()->split() as $cat):
              $val = $url = $order = "";
              if ($cat == "entrepreneurship") {
                $val = "E";
                $url = "entrepreneurship";
                $order = 1;
              } else if ($cat == "tech") {
                $val = "TI";
                $url = "tech-innovation";
                $order = 2;
              }
              if ($cat == "communication") {
                $val = "C";
                $url = "communication";
                $order = 3;
              }
              ?>
              <li style="order: <?= $order ?>;">
                <a class="active" href="<?= $site->url() . "/secret-sauce/" . $url ?>" title="<?= $cat ?>">

                  <span><?= html($val) ?></span>
                </a>


              </li>
            <?php
            endforeach ?>


          </ul>
        </div>

      </div>


    </div>

    <div class="prev-next">
      <?php

      $collection = $page->siblings()->listed();
      if ($prev = $page->prev($collection)) { ?>
        <a title="previous" href="<?= $prev->url() ?>"><?= svg('assets/icons/previous.svg') ?></a>
      <?php } ?>



      <?php
      if ($next = $page->next($collection)) { ?>
        <a title="next" href="<?= $next->url() ?>"><?= svg('assets/icons/next.svg') ?></a>
      <?php } ?>

    </div>
  </div>

  <div class="right-side">
    <div class="images-container">
      <?php


      foreach ($page->illustration()->toStructure() as $illu) {

        $image = $illu->illustration_video()->toFile();
        $video = $illu->fichier_video()->toFile();


        if ($image && !$video) {
          $image = $image->resize(1000); ?>
          <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">
        <?php } else if ($image && $video) { ?>
          <div class="video-block ">
            <?= $image->thumb() ?>


            <button class="button-play-video" type="button" data-video="<?= $video->url() ?>"
                    data-video-type="<?= $video->mime() ?>">
              <?= svg('assets/icons/play-video.svg') ?>
            </button>
          </div>
        <?php } else if (!$image && $video) { ?>
          <video controls controlsList="nodownload noplaybackrate" disablePictureInPicture>
            <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
          </video>
        <?php }

      }

      ?>


    </div>

  </div>


  <div class="open-video">
    <button id="close-video"><?= svg('assets/icons/close-white.svg') ?></button>
    <video controls id="myVideo" controlsList="nodownload noplaybackrate" disablePictureInPicture>
      <source src="" type="">
    </video>
  </div>
</section>


<?php snippet('footer'); ?>
<script>
  $(".button-play-video").click(function () {
    $("#myVideo source").attr("src", $(this).attr("data-video")), $("#myVideo source").attr("type", $(this).attr("data-video-type")), $("#myVideo")[0].load()
  });
</script>

<?php


echo js([
  'assets/js/video.js'
]);
?>




