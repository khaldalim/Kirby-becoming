<?php snippet('header') ?>

<?= css([
  'assets/css/publications.css',
]) ?>


<section id="publications">


  <div class="publications">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>


    <div class="pub-left-container">
      <div class="tab-select">
        <ul>


          <li>
            <a href="javascript:void(0)" data-tab="1" class=" no-fade active"><?= $page->titre_podcasts() ?></a>
          </li>

          <li>
            <a href="javascript:void(0)" data-tab="2" class="no-fade"><?= $page->titre_pop() ?></a>
          </li>

          <li>
            <a href="javascript:void(0)" data-tab="3" class="no-fade"><?= $page->titre_etudes() ?></a>
          </li>
        </ul>

        <div class="separator"></div>
      </div>


      <div class="content">


        <h1><?= $page->headline() ?></h1>

        <div class="content-tab-pub active" id="content-tab-pub-1" data-content="1">
          <h2><?= $page->title_publications() ?></h2>
          <div class="wysiwyg">
            <?= $page->wysiwyg()->text()->kt() ?>
          </div>
        </div>

        <div class="content-tab-pub" id="content-tab-pub-2" data-content="2">
          <h2><?= $page->title_publications_pop() ?></h2>
          <div class="wysiwyg">
            <?= $page->wysiwyg_pop()->text()->kt() ?>
          </div>
        </div>

        <div class="content-tab-pub" id="content-tab-pub-3" data-content="3">
          <h2><?= $page->title_publications_etudes() ?></h2>
          <div class="wysiwyg">
            <?= $page->wysiwyg_etudes()->text()->kt() ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="publications-tabs">

    <div id="tab-1" class="tab  active">
      <div class="wave-container">
        <div id="waveform"></div>
      </div>
      <h3><?= $page->concerne() ?></h3>


      <ul class="audio-list">

        <?php
        $i = 1;
        foreach ($page->Audios()->toStructure() as $audio) {

          ?>
          <li>
            <button data-audio="<?= $audio->audio()->toFile()->url() ?>" data-index='<?= $i ?>' data-active="0">
                         <span>
                            <span class="play-pause"><?= svg('assets/icons/play.svg') ?></span>
                            <span class="title-audio"><?= $audio->name() ?></span>
                         </span>
              <span class="time-audio">0:00</span>
            </button>
          </li>
          <?php
          $i++;
        } ?>

      </ul>
    </div>


    <div id="tab-2" class="tab ">
      <div class="images-container">
        <?php

        foreach ($page->pop_content()->toStructure() as $pop) {
          $image = $pop->illustration()->toFile();
          $link = $pop->link()->toLinkObject();
          $image = $image->resize(1000);


          if ($image && $link->value()) { ?>

            <a style="z-index: 1" href="<?= $link->value() ?>" <?php if ($link->popup()){ echo 'target=\'_blank\'';} ?> class="no-fade">
              <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">
            </a>
            <?php

          } else {
            ?>


            <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">
            <?php
          }
        }


        ?>
      </div>
    </div>


    <div id="tab-3" class="tab ">
      <div class="images-container">

        <?php

        foreach ($page->etudes_content()->toStructure() as $pop) {
          $image = $pop->illustration()->toFile();
          $pdf = $pop->pdf()->toFile();
          $image = $image->resize(1000);


          if ($image && $link->value()) { ?>

            <a style="z-index: 1" href="<?= $pdf ?>" target="_blank\" class="no-fade">
              <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">
            </a>
            <?php

          } else {
            ?>


            <img src="<?= $image->url() ?>" alt="<?= $image->content()->alt() ?>">
            <?php
          }


        }
          ?>
      </div>
    </div>

  </div>
</section>


<?php snippet('footer') ?>


<?= js(['assets/js/wavesurfer.js',
  'assets/js/publications.js',
  '@auto']) ?>
