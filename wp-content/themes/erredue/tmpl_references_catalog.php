<?php
/*
Template Name: Каталог упоминаний
Template Post Type: page
*/

get_header();
?>

<? get_template_part('promo'); ?>

<section class="catalog  catalog--applicazioni">
  <div class="container">
    <div class="catalog_list">

      <?php

      $production = new WP_Query(array('post_type' => 'reference', 'posts_per_page' => -1, 'order' => 'ASC')); ?>

      <?php if ( $production->have_posts() ) : while ( $production->have_posts() ) : $production->the_post();
      $slug = $production->post->post_name;
      ?>

      <div class="catalog_card">
        <div class="img_wrapper">
          <img src="<?= get_field('catalog_image'); ?>" alt="">

          <?php if(get_field('pdf_file')) { ?>
            <div class="hover"><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></div>
          <? } ?>
        </div>

        <div class="text_box">
          <div class="title_box">
            <p class="title text_size_l"><?= get_field('title'); ?></p>
          </div>
        </div>

        <?php if(get_field('pdf_file')) { ?>
          <a href="<?= get_field('pdf_file'); ?>" target="_blank" class="catalog_card_link"></a>
        <? } ?>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>


</div>
</div>
</section>



<?php get_footer(); ?>