<div class="page-footer">
  <div class="container">

    <?php
    if(pll_current_language('slug') == 'it') {
      get_template_part('it_footer');
    } else if(pll_current_language('slug') == 'en') {
      get_template_part('en_footer');
    }
    ?>

  </div>
</div>

<script src="<?= get_stylesheet_directory_uri() . '/static/js/script.min.js'; ?>"></script>

<?php wp_footer(); ?>

</body>
</html>