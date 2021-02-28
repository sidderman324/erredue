<footer class="page-footer">
  <div class="container">

    <?php
    if(pll_current_language('slug') == 'it') {
      get_template_part('it_footer');
    } else if(pll_current_language('slug') == 'en') {
      get_template_part('en_footer');
    }
    ?>

  </div>
  <div class="develop">
    <div class="container">

      <?php
      if(pll_current_language('slug') == 'it') { ?>
        <a class="text_size_m" target="_blank" href="https://sergey-sidorov.ru/">Sviluppo e Design</a>
      <? } else if(pll_current_language('slug') == 'en') { ?>
        <a class="text_size_m" target="_blank" href="https://sergey-sidorov.ru/">Development and Design</a>
      <?}?>


    </div>
  </div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
