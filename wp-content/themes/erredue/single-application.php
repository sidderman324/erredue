<?php
/*
* Template name: Страница применения
* Template post type: post
*/

get_header();

?>

<?php global $post; $post_slug=$post->post_name; ?>

<? get_template_part('promo'); ?>

<section class="textpage">
  <div class="container">

    <?= get_field('content'); ?>

  </div>
</section>

<? get_template_part('feedback_form'); ?>

<?php get_footer(); ?>