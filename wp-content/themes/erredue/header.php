<!DOCTYPE html>
<html lang="<?php echo pll_current_language('slug'); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/static/css/style.css">
  <title><?= the_field('title'); ?></title>
  <meta name="description" content="<?php the_field('description'); ?>">
  <meta name="keywords" content="<?php the_field('keywords'); ?>">
  <?php wp_head(); ?>

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/static/imgs/favicons/apple-icon-180x180.png">
  <link rel="icon" href="<?= get_stylesheet_directory_uri(); ?>/static/imgs/favicons/favicon.png" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/static/imgs/favicons/favicon-16x16.png">

</head>

<body>

  <?php
  if(pll_current_language('slug') == 'it') {
    $link = '/';
  } else if(pll_current_language('slug') == 'en') {
    $link = '/en';
  }
  ?>

  <header class="page-header">
    <div class="container">

      <div class="burger_wrapper js-menu-open">
        <div class="burger"></div>
      </div>
      <div class="logo_wrapper">

        <a href="<?= $link; ?>">
          <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/erredue_logo_header_small.png" alt="">
        </a>

      </div>

      <div class="menu_wrapper">

        <?php
        if(pll_current_language('slug') == 'it') {
          wp_nav_menu([
            'menu' => 'Главное меню',
            'container' => 'nav',
            'container_class' => 'main_menu'
          ]);
        } else if(pll_current_language('slug') == 'en') {
          wp_nav_menu([
            'menu' => 'Главное меню Eng',
            'container' => 'nav',
            'container_class' => 'main_menu'
          ]);
        }
        ?>

        <ul class="lang_box">
          <?php pll_the_languages( array(
            'show_flags' => 1,
            'show_names' => 0
          ) ); ?>
        </ul>

        <div class="burger_wrapper js-menu-close">
          <div class="burger active"></div>
        </div>

      </div>
    </div>
  </header>


  <?php get_template_part('/_frontend/modules/svg_icons'); ?>
