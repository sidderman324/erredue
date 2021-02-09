<?php
/*
Template Name: Контентная страница
Template Post Type: post, page, portfolio
*/

get_header();
?>


<? get_template_part('promo'); ?>

<?php

foreach (get_field('content') as $key => $value) {

  // Текстовый блок с заголовком
  if ($value['acf_fc_layout'] == 'text_block') { ?>

    <section class="content_block">
      <div class="container">
        <div class="text_box">
          <h2 class="section_title text_size_xxl blue bold"><?= $value['title']; ?></h2>
          <div class="text text_size_l">
            <?= $value['text']; ?>
          </div>
        </div>
      </div>
    </section>

  <? }

  // Фоновое изображение с синим блоком
  if ($value['acf_fc_layout'] == 'image_bgr_text') { ?>

    <section class="image_bgr" style="background-image: url('<?= $value['image_item']; ?>');">
      <div class="container">

        <div class="text_blue_box">
          <p class="title text_size_xxl white"><?= $value['title']; ?></p>
          <div class="text text_size_l white">
            <?= $value['text']; ?>
          </div>
        </div>

      </div>
    </section>

  <? }
  // Ссылка на скачивание
  if ($value['acf_fc_layout'] == 'download_block') { ?>

    <section class="download_block">
      <div class="container">
        <a href="<?= $value['file']; ?>">
          <svg class="svg_icon"><use xlink:href="#download_icon"></use></svg>

          <p class="text_download text_size_xxxl"><?= $value['download_text']; ?></p>
        </a>
      </div>
    </section>

  <? }
}



?>


<?php get_footer(); ?>