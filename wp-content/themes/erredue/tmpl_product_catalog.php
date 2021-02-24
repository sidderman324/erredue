<?php
/*
Template Name: Каталог продукции
Template Post Type: page
*/

get_header();
?>


<? get_template_part('promo'); ?>

<section class="catalog">
  <div class="container">
    <div class="catalog_list">

      <?php
      $production_type = get_field('production_type');

      if($production_type == 'ind') {
        $prod_type = 'product_industr';
      } else if($production_type == 'labs') {
        $prod_type = 'product_labs';
      }

      $production = new WP_Query(array('post_type' => $prod_type, 'posts_per_page' => -1, 'order' => 'ASC')); ?>

      <?php if ( $production->have_posts() ) : while ( $production->have_posts() ) : $production->the_post();
      $slug = $production->post->post_name;
      ?>

      <div class="catalog_card">
      <div class="img_wrapper">
      <img src="<?= get_field('catalog_image'); ?>" alt="">
      <div class="hover"><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></div>
      </div>

      <div class="text_box">
      <div class="title_box">
      <p class="title text_size_l"><?= get_field('title'); ?></p>
      </div>
      <?php if(get_field('short_description')) { ?>
        <p class="text text_size_m"><?= get_field('short_description'); ?></p>
        <?}?>
        </div>

        <a href="<?php the_permalink(); ?>" class="catalog_card_link"></a>
        </div>

        <?php endwhile; ?>
        <?php endif; ?>




        </div>
        </div>
        </section>



        <?php get_footer(); ?>