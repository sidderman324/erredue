<?php
/*
* Template name: Страница продукта
* Template post type: post, page
*/

get_header();

?>

<?php global $post; $post_slug=$post->post_name; ?>

<section class="product_card">

  <div class="head">
    <div class="container">

      <div class="img_wrapper">
        <img src="<?= get_field('main_image'); ?>" alt="">
      </div>

      <div class="text_box">
        <a href="#" class="category_link text_size_xxl blue">PRODOTTI PER L'INDUSTRIA</a>
        <h1 class="title text_size_xxxl blue"><?= get_field('title'); ?></h1>
      </div>
    </div>
  </div>

  <div class="content_box">
    <div class="container">

      <?= get_field('full_description'); ?>

      <? if(get_field('pdf_file')) { ?>
        <a href="<?= get_field('pdf_file')['pdf_item']; ?>" download><?= get_field('pdf_file')['link_text']; ?></a>
        <?}?>

        <?if (get_field('gallery')) { ?>

          <div class="gallery">

            <?php foreach (get_field('gallery') as $key => $value) { ?>
              <div class="gallery_item"><img src="<?= $value['image_item']; ?>" alt=""></div>
              <?}?>

            </div>

            <?}?>
          </div>
        </div>

      </section>

      <?php get_footer(); ?>