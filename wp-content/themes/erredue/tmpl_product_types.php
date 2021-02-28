<?php
/*
Template Name: Типы продуктов
Template Post Type: page
*/

get_header();
?>

<? get_template_part('promo'); ?>

<section class="products_types">

  <div class="container">

    <div class="product_type product_type--white">
      <div class="head">
        <p class="title text_size_xxl"><?= get_field('cards_group')['titles']['ind']; ?></p>
      </div>
      <div class="img_wrapper">
        <img src="<?= get_field('cards_group')['images']['ind']; ?>" alt="">
        <a href="<?= get_field('cards_group')['links']['ind']; ?>">
          <span><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></span>
        </a>
      </div>
    </div>

    <div class="product_type product_type--blue">
      <div class="head">
        <p class="title text_size_xxl"><?= get_field('cards_group')['titles']['labs']; ?></p>
      </div>
      <div class="img_wrapper">
        <img src="<?= get_field('cards_group')['images']['labs']; ?>" alt="">
        <a href="<?= get_field('cards_group')['links']['labs']; ?>">
          <span><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></span>
        </a>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>
