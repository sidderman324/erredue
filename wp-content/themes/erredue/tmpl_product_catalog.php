<?php
/*
Template Name: Каталог продукции
*/

get_header();
?>


<?php
$type = explode('_', get_field('promo')['type'])[0];
if($type == 'small') {
  $type = 'promo--header-small';
} else {
  $type = '';
}
?>

<section class="promo promo--header <?= $type; ?>" style="background-image: url('<?= get_field('promo')['bgr_image']?>');">
  <div class="container">

    <div class="text_box">
      <h1 class="title text_size_xxxl white bold"><span>///</span> <?= get_field('promo')['title']?></h1>

      <div class="text text_size_l white bold">
        <?= get_field('promo')['text']?>
      </div>
    </div>

  </div>
</section>

<section class="catalog">
  <div class="container">
    <div class="catalog_list">

      <?php
      $production_type = get_field('production_type');

      $production = new WP_Query(array('post_type' => 'production', 'posts_per_page' => -1, 'order' => 'ASC')); ?>

      <?php if ( $production->have_posts() ) : while ( $production->have_posts() ) : $production->the_post();
      $slug = $production->post->post_name;
      ?>

      <?php if (get_field('production_type')['value'] == $production_type) { ?>
        <div class="catalog_card">
          <div class="img_wrapper">
            <img src="/wp-content/themes/erredue/static/imgs/catalog/prod_1.jpg" alt="">
            <div class="hover"><svg class="svg_icon"><use xlink:href="#plus_icon"></use></svg></div>
          </div>

          <div class="text_box">
            <div class="title_box">
              <p class="title text_size_l">GENERATORI DI IDROGENO SIRIO</p>
            </div>
            <p class="text text_size_m">nitroBox è un sistema semplice e compatto per la produzione di azoto pressurizzato direttamente dove serve</p>
          </div>

          <a href="<?php the_permalink(); ?>" class="catalog_card_link"></a>
        </div>
      <? } ?>

    <?php endwhile; ?>
  <?php endif; ?>




</div>
</div>
</section>



<?php get_footer(); ?>