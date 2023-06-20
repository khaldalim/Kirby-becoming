<?php


?>

<?php snippet('header') ?>
<?= css([
  'assets/css/vous.css',
]) ?>

<section id="vous">
  <div class="content">
    <div class="scroll-arrow"><?= svg('assets/icons/arrow-scroll.svg') ?></div>
    <div class="cont">
      <h2><?= $page->sub_title()->text() ?></h2>
      <h1><?= $page->title_vous()->text() ?></h1>


      <div>
        <?= $page->textarea()->text()->kt() ?>
      </div>
    </div>

    <div class="hover-container">
      <img class="img-hover" src="">
    </div>
  </div>

  <div class="references">

    <div class="selector">
      <ul>
        <li>
          <a class="no-fade" href="javascript:void(0)" data-filter="entrepreneurship">
            <div>E</div>

            Entrepreneurship
          </a>
        </li>

        <li>
          <a class="no-fade" href="javascript:void(0)" data-filter="tech">
            <div>TI</div>

            Tech/Innovation
          </a>
        </li>

        <li>
          <a class="no-fade" href="javascript:void(0)" data-filter="communication">
            <div>C</div>

            Communication
          </a>
        </li>
      </ul>

    </div>

    <div class="list-references">
      <ul>
        <?php foreach ($page->children() as $subpage) {
          $hoverImg = null;
          $hoverImg = $subpage->image_hover();
          ?>

          <li <?php if (is_object($hoverImg->toFile())) { ?>
            class="item" data-image="<?= $hoverImg->toFile()->resize(null, 400)->url() ?>"
          <?php } ?>>

            <a href="<?= $subpage->url() ?>" title="<?= $subpage->title() ?>">
            <span>
                  <strong> <?= html($subpage->title()) ?></strong> / <?= html($subpage->type_vous_single()) ?>
                </span>
              <div class="categories">

                <?php foreach ($subpage->categories()->split() as $cat) {
                  $val = $order =  "";
                  if ($cat == "entrepreneurship") {
                    $val = "E";
                    $order = 1;
                  } else if ($cat == "tech") {
                    $val = "TI";
                    $order = 2;
                  }
                  if ($cat == "communication") {
                    $val = "C";
                    $order = 3;
                  }
                  ?>
                  <div class="cat" style="order: <?= $order ?>" data-cat="<?= $cat ?>"><?php echo $val ?></div>
                <?php } ?>

              </div>

            </a>
          </li>

        <?php } ?>

      </ul>
    </div>

  </div>


</section>

<?php

snippet('footer');
echo js([
  'assets/js/vous.js'
]);
?>


