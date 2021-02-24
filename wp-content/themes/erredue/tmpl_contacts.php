<?php
/*
Template Name: Контакты
Template Post Type: page
*/

get_header();
?>

<? get_template_part('promo'); ?>

<section class="contacts">
  <div class="container">

    <?php
    if(pll_current_language('slug') == 'it') {
      $lang_setup = ["SEDE DI LIVORNO","Contatti RAPPRESENTATE"];
    } else if(pll_current_language('slug') == 'en') {
      $lang_setup = ["",""];
    }
    ?>

    <div class="contacts_column">
      <h2 class="section_title text_size_xxl blue bold"><?= $lang_setup[0]; ?></h2>

      <?php if(get_field('contacts_main')['adress']) {?>
        <div class="block">
          <svg class="svg_icon"><use xlink:href="#place_icon"></use></svg>
          <p class="text text_size_m bold"><?= get_field('contacts_main')['adress']?></p>
        </div>
      <?}?>

      <?php if(get_field('contacts_main')['phone']) {?>
        <div class="block">
          <svg class="svg_icon"><use xlink:href="#phone_icon"></use></svg>
          <p class="text text_size_m bold">Tel. <?= get_field('contacts_main')['phone']?> - Fax <?= get_field('contacts_main')['fax']?></p>
        </div>
      <?}?>

      <?php if(get_field('contacts_main')['email']) {?>
        <div class="block">
          <svg class="svg_icon"><use xlink:href="#mail_icon"></use></svg>
          <p class="text text_size_m bold"><a href="mailto:<?= get_field('contacts_main')['email']?>"><?= get_field('contacts_main')['email']?></a></p>
        </div>
      <?}?>


    </div>
    <div class="contacts_column">
      <h2 class="section_title text_size_xxl blue bold"><?= $lang_setup[1]; ?></h2>

      <?php if(get_field('representative_contacts')['phone']) {?>
        <div class="block">
          <svg class="svg_icon"><use xlink:href="#phone_icon"></use></svg>
          <p class="text text_size_m bold blue">Tel. <?= get_field('representative_contacts')['phone']?></p>
        </div>
      <?}?>

      <?php if(get_field('representative_contacts')['email']) {?>
        <div class="block">
          <svg class="svg_icon"><use xlink:href="#mail_icon"></use></svg>
          <p class="text text_size_m bold"><a href="mailto:<?= get_field('representative_contacts')['email']?>"><?= get_field('representative_contacts')['email']?></a></p>
        </div>
      <?}?>
    </div>
  </div>
</section>

<? get_template_part('feedback_form'); ?>

<?php get_footer(); ?>