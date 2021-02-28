<?php
/*
* Template name: Страница продукта
* Template post type: post
*/

get_header();

?>

<?php global $post; $post_slug=$post->post_name;
$post_type = $post->post_type;
?>


<section class="product_card">

  <div class="head">
    <div class="container">

      <div class="img_wrapper">
        <img src="<?= get_field('main_image'); ?>" alt="">
      </div>

      <div class="text_box">

        <?php
        if(pll_current_language('slug') == 'it') {
          $back_link = ["PRODOTTI PER L'INDUSTRIA","/products/industrial/","PRODOTTI PER IL LABORATORIO","/products/laboratory/"];
        } else if(pll_current_language('slug') == 'en') {
          $back_link = ["",""];
        }
        ?>

        <?php if($post_type == 'product_labs') { ?>
          <a href="<?= $back_link[3]; ?>" class="category_link text_size_xxl blue"><?= $back_link[2]; ?></a>
        <? } else if($post_type == 'product_industr') { ?>
          <a href="<?= $back_link[1]; ?>" class="category_link text_size_xxl blue"><?= $back_link[0]; ?></a>
        <? } ?>

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
          </div>
        </div>

      </section>

      <? get_template_part('feedback_form'); ?>

      <?php get_footer(); ?>
