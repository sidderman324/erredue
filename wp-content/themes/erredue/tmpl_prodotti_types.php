<?php
/*
Template Name: Типа продуктов
Template Post Type: post, page, portfolio
*/

get_header();
?>

<section class="promo promo--header promo--header-small" style="background-image: url('/wp-content/themes/erredue/static/imgs/prodotti_head.jpg');">
  <div class="container">

    <div class="text_box">
      <h1 class="title text_size_xxxl white bold"><span>///</span> PRODOTTI</h1>
    </div>

  </div>
</section>

<section class="products_types">
  <div class="container">

    <div class="product_type product_type--white">
      <div class="head">
        <p class="title text_size_xxl">PRODOTTI PER L'INDUSTRIA</p>
      </div>
      <div class="img_wrapper">
        <img src="/wp-content/themes/erredue/static/imgs/catalog/industrial_group.jpg" alt="">
        <a href="#">
          <span><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></span>
        </a>
      </div>
    </div>

    <div class="product_type product_type--blue">
      <div class="head">
        <p class="title text_size_xxl">PRODOTTI PER IL LABORATORIO</p>
      </div>
      <div class="img_wrapper">
        <img src="/wp-content/themes/erredue/static/imgs/catalog/lab_group.jpg" alt="">
        <a href="#">
          <span><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></span>
        </a>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>