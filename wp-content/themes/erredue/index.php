<?php
/*
The main template file
Template Name: Главная страница
Template Post Type: post, page, portfolio
*/

get_header();
?>


<section class="promo" style="background-image: url('<?= get_field('main_bgr_image'); ?>');">
  <div class="container">

    <div class="text_box">
      <p class="text text_size_xl white bold"><?= get_field('promo_text'); ?></p>
      <h1 class="title text_size_xxxl white bold"><?= get_field('promo_title'); ?></h1>
    </div>

    <div class="button_box">
      <a href="#" class="btn btn--blue text_size_l btn--right-arrow">GAS PER LABORATORIO</a>
      <a href="#" class="btn btn--white text_size_l btn--right-arrow">GAS INDUSTRIALI</a>
    </div>

  </div>
</section>

<section class="mission_block">
  <div class="container">
    <h2 class="mission_title blue bold"><?= get_field('mission_title'); ?></h2>
    <span class="blue_line"></span>
    <p class="text text_size_l"><?= get_field('mission_text'); ?></p>
  </div>
</section>

<section class="image_bgr" style="background-image: url('<?= get_field('image_bgr_text')['image_item']; ?>');">
  <div class="container">

    <div class="text_blue_box">
      <? if(get_field('image_bgr_text')['title']) { ?>
        <p class="title text_size_xxl white"><?= get_field('image_bgr_text')['title']; ?></p>
      <? } ?>
      <div class="text text_size_l white">
        <?= get_field('image_bgr_text')['text']; ?>
      </div>

    </div>

  </div>
</section>

<section class="produced_block">
  <div class="container">
    <div class="text_box">
      <h2 class="section_title text_size_xxl blue">
        <?= get_field('produced_block')['section_title']; ?>
        <span class="flag_separator"></span>
      </h2>

      <?= get_field('produced_block')['text']; ?>
    </div>

    <div class="produced_circle text_size_l"><?= get_field('produced_block')['produced_circle']; ?></div>
  </div>
</section>


<?php get_footer(); ?>