<div id="burger-menu">
  <div class="point_close">
    <a class="logo" href="<?= $site->url() ?>">
      .
    </a>
   <!-- <a href="javascript:void(0)" class="no-fade" id="close-burger">
      <?/*= svg('assets/icons/close.svg') */?>
    </a>-->
  </div>
  <div class="burger-content">

    <?php $headerLinks = $site->content()->pages()->related()->toPages(); ?>

    <ul>
      <?php
      foreach ($headerLinks as $page) {
        ?>
        <li>
          <a title="<?= $page->title() ?>" href="<?= $page->url() ?>"><?= $page->title() ?></a>
        </li>
      <?php } ?>


    </ul>


    <p>
      <?= $headerLinks = $site->content()->menuheadline() ?>
    </p>
  </div>
</div>
