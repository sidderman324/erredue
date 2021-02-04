<!DOCTYPE html>
<html lang="en">
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
</head>

<body>


  <div class="page-header">
    <div class="container">
      <div class="logo_wrapper">
        <a href="/">
          <img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/erredue_logo_header_small.png" alt="">
        </a>
      </div>

      <?php wp_nav_menu([
        'menu' => 'Главное меню',
        'container' => 'nav',
        'container_class' => 'main_menu'
       ]); ?>

      <!-- <nav class="main_menu"> -->

        <!-- <ul>
          <li><a href="#" class="main_menu_link">HOME</a></li>
          <li><a href="#" class="main_menu_link">PROFILO AZIENDALE</a></li>
          <li><a href="#" class="main_menu_link">PRODOTTI</a></li>
          <li><a href="#" class="main_menu_link">APPLICAZIONI</a></li>
          <li><a href="#" class="main_menu_link">INSTALLAZIONI</a></li>
          <li><a href="#" class="main_menu_link">REFERENZE</a></li>
          <li><a href="#" class="main_menu_link">CERTIFICAZIONI</a></li>
          <li><a href="#" class="main_menu_link">CONTATTI</a></li>
        </ul> -->
      <!-- </nav> -->

      <div class="lang_box">
        <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/flag_it.png" alt=""></a>
        <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/flag_eng.png" alt=""></a>
        <a href="#"><img src="<?= get_stylesheet_directory_uri(); ?>/static/imgs/flag_rus.png" alt=""></a>
      </div>
    </div>
  </div>


  <?php get_template_part('/_frontend/modules/svg_icons'); ?>
