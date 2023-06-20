<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This footer snippet is reused in all templates.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
</main>

<footer class="footer">

  <div class="column links">
    <?php $footerLinks = $site->content()->footer_pages()->related()->toPages();
    $i = 0;
    foreach ($footerLinks as $pageLink) {
      ?>
      <a title="<?= $pageLink->title() ?>" href="<?= $pageLink->url() ?>" class="<?php if ($i === 0) {
        echo 'bold-link';
      } ?>"><?= $pageLink->title() ?></a>

      <?php
      $i++;
    } ?>

    <div>
      <?= svg('assets/icons/point.svg') ?>
    </div>
  </div>
  <div class="column lang-socials">

    <div class="dropdown languages">

<!--      <div class="dropdown-content">
        <?php /*foreach ($kirby->languages() as $language){
          if ($kirby->language() !== $language){*/?>
          <a title="<?/*= html($language->name()) */?>"  hreflang="<?php /*echo $language->code() */?>" href="<?/*= $page->url($language->code()) */?>">
            <?/*= html($language->name()) */?>
          </a>
        <?php /*}
} */?>

      </div>
      <button class="dropbtn"><?/*= $kirby->language()->name() */?></button>-->

    </div>



    <?php snippet('social') ?>
  </div>

</footer>

<?= js([
  'assets/js/jquery.min.js',
  'assets/js/script.js'
]) ?>

</body>



</html>
<script>

</script>