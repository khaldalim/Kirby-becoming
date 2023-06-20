<?php snippet('header') ?>

<?= css([
  'assets/css/contact.css'
]) ?>

<section id="contact">
  <div class="background-contact hide-mobile">
    <?= svg('assets/images/map.svg') ?>
  </div>
  <div class="background-contact hide-desktop">
    <?= svg('assets/icons/map.svg') ?>
  </div>
  <div class="content">
    <div class="half-width">
      <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
      <div class="cont">
        <h2><?= $page->sub_title()->text() ?></h2>
        <h1><?= $page->title_contact()->text() ?></h1>
        <div>
          <?= $page->description()->text()->kt() ?>

        </div>
      </div>
    </div>


  </div>
  <div class="villes">
    <?php


    foreach ($page->addresses()->toStructure() as $address) {


      ?>
      <div class="city">
        <h2><?php echo $address->title_ville(); ?></h2>
        <div class="content">
          <?php echo $address->description_ville()->kt(); ?>
        </div>
      </div>
    <?php } ?>

  </div>


</section>

<?php snippet('footer') ?>

