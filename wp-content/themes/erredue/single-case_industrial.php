<?php
/*
* Template name: Страница применения
* Template post type: case_labs, case_industrial
*/

get_header();

?>

<?php global $post; $post_slug=$post->post_name; ?>

<? get_template_part('promo'); ?>

<section class="textpage">
  <div class="container">

    <?if (get_field('gallery')) { ?>

      <div class="gallery" id="lightgallery">

        <?php foreach (get_field('gallery') as $key => $value) { ?>
          <div class="gallery_item" data-src="<?= $value['image_item']; ?>" data-sub-html="<h4><?= get_field('title'); ?></h4><p><?= get_field('short_description'); ?></p>">
            <a href="<?= $value['image_item']; ?>">
              <img src="<?= $value['image_item']; ?>" alt="">
            </a>
          </div>
          <?}?>

        </div>

        <script>
            lightGallery(document.getElementById('lightgallery'), {
              thumbnail:false
            });
        </script>

        <?}?>

        <?= get_field('text_content'); ?>

      </div>
    </section>

    <? get_template_part('feedback_form'); ?>

    <?php get_footer(); ?>
