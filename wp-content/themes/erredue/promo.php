<?php
$type = explode('_', get_field('promo')['type']);
if($type[0] == 'small') {
  $type_class = 'promo--header-small';
} else {
  $type_class = '';
}

?>

<section class="promo promo--header <?= $type_class; ?>" style="background-image: url('<?= get_field('promo')['bgr_image']?>');">
  <div class="container">

    <div class="text_box">

      <?if(get_field('promo')['type'] == 'small_title_text_up') { ?>

        <div class="text text_size_l white bold">
          <?= get_field('promo')['text']?>
        </div>
        <h1 class="title text_size_xxxl white bold"><span>///</span> <?= get_field('promo')['title']?></h1>

      <?} else if(get_field('promo')['type'] == 'small_title_text_down') { ?>

        <h1 class="title text_size_xxxl white bold"><span>///</span> <?= get_field('promo')['title']?></h1>
        <div class="text text_size_l white bold">
          <?= get_field('promo')['text']?>
        </div>

      <?} else if(get_field('promo')['type'] == 'small_title_link') { ?>

        <?php
        if(pll_current_language('slug') == 'it') {
          $lang_link = ['APPLICAZIONI','/applications'];
        } else if(pll_current_language('slug') == 'en') {
          $lang_link = ['APPLICAZIONI','/applications'];
        }
        ?>

        <a href="<?= $lang_link[1]; ?>" class="link text_size_l white"><?= $lang_link[0]; ?></a>
        <h1 class="title text_size_xxxl white bold"><span>///</span> <?= get_field('promo')['title']?></h1>

      <?} else if(get_field('promo')['type'] == 'small_title') { ?>

        <h1 class="title text_size_xxxl white bold"><span>///</span> <?= get_field('promo')['title']?></h1>

      <?} else { ?>
        <h1 class="title text_size_xxxl white bold"><span>///</span> <?= get_field('promo')['title']?></h1>
        <div class="text text_size_l white bold">
          <?= get_field('promo')['text']?>
        </div>
      <? }?>


    </div>

  </div>
</section>