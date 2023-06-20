<?php


$image = $page->image();
?>

<?php snippet('header') ?>
<?= css([
  'assets/css/secret-sauce.css',
]) ?>
<section id="secret-sauce">
  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_sauce()->text() ?></h1>
      <div>
        <?= $page->textarea()->text()->kt() ?>
      </div>


      <div class="image-block hide-desktop">
        <div class="etic-image">
 <!--         <img src="<?/*= $image->url() */?>" alt="<?/*= $image->content()->alt() */?>">-->
          <lottie-player src="<?php echo asset("assets/lottie/Logos_ETIC.json") ?>"
                         background="transparent" speed="1"  autoplay></lottie-player>
        </div>
      </div>



      <div class="etic">
        <h4><?= $page->titre_liens()->text() ?></h4>


        <ul>
          <?php foreach($page->children() as $subpage): ?>
          <li>
            <a href="<?= $subpage->url() ?>" title="<?= $subpage->title() ?>">
              <div>
              <?= svg('assets/icons/arrow-right.svg') ?>
              </div>
              <span><?= html($subpage->title() ) ?></span>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>

  </div>


  <div class="image-block hide-mobile">
    <div class="etic-image">

      <lottie-player src="<?php echo asset("assets/lottie/Logos_ETIC.json") ?>"
                     background="transparent" speed="1"  autoplay></lottie-player>
     <!-- <img src="<?/*= $image->url() */?>" alt="<?/*= $image->content()->alt() */?>">-->
    </div>
  </div>



</section>

<?php snippet('footer') ?>

