<?php
/*
Template Name: Типы продуктов
Template Post Type: page
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

    <?php
    if(pll_current_language('slug') == 'it') {
      $lang_setup = ["PRODOTTI PER L'INDUSTRIA","/products/industrial/","PRODOTTI PER IL LABORATORIO","/products/laboratory/"];
    } else if(pll_current_language('slug') == 'en') {
      $lang_setup = ["PRODOTTI PER L'INDUSTRIA","/products/industrial/","PRODOTTI PER IL LABORATORIO","/products/laboratory/"];
    }
    ?>

    <div class="product_type product_type--white">
      <div class="head">
        <p class="title text_size_xxl"><?= $lang_setup[0]; ?></p>
      </div>
      <div class="img_wrapper">
        <img src="/wp-content/themes/erredue/static/imgs/catalog/industrial_group.jpg" alt="">
        <a href="<?= $lang_setup[1]; ?>">
          <span><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></span>
        </a>
      </div>
    </div>

    <div class="product_type product_type--blue">
      <div class="head">
        <p class="title text_size_xxl"><?= $lang_setup[2]; ?></p>
      </div>
      <div class="img_wrapper">
        <img src="/wp-content/themes/erredue/static/imgs/catalog/lab_group.jpg" alt="">
        <a href="<?= $lang_setup[3]; ?>">
          <span><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></span>
        </a>
      </div>
    </div>

  </div>
</section>


<?php get_footer(); ?>