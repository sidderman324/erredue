<section class="feedback">
  <div class="container">

    <?php
    if(pll_current_language('slug') == 'it') {
      $lang_setup = ["Richiedere informazioni sul prodotto","Nome", "Cognome","Email","Richiesta","invia"];
    } else if(pll_current_language('slug') == 'en') {
      $lang_setup = ["Request product information","Name", "Last name","Email","Message","Send"];
    }
    ?>

    <div class="form_block">
      <div class="head">
        <p class="title text_size_xxl white uppercase"><?= $lang_setup[0]; ?></p>
      </div>

      <?= do_shortcode('[contact-form-7 id="290" title="FeedBack It"]'); ?>


      <!-- <form action="" method="post">
        <div class="column">
          <div class="input_box"><input type="text" name="" placeholder="<?= $lang_setup[1]; ?>"></div>
          <div class="input_box"><input type="text" name="" placeholder="<?= $lang_setup[2]; ?>"></div>
          <div class="input_box"><input type="text" name="" placeholder="<?= $lang_setup[3]; ?>"></div>
        </div>
        <div class="column">
          <div class="input_box">
            <textarea name="name" placeholder="<?= $lang_setup[4]; ?>"></textarea>
          </div>
        </div>

        <div class="row">
          <div class="custom_checkbox">
            <input id="confirmation" type="checkbox">
            <label for="confirmation" name="confirmation"><span><a href="#">Leggi le Condizioni di Sicurezza e Privacy</a>: consenso al trattamento dei dati personali ai sensi del D.Lgs 196/2003 "Protezione dei dati personali"<br>Questo sito è protetto da reCAPTCHA e si applicano le norme sulla <a href="#">Privacy ed i Termini di servizio</a> di Google.</span></label>
          </div>
        </div>

        <input type="submit" value="<?= $lang_setup[5]; ?>" class="submit_btn">
      </form> -->
    </div>
  </div>
</section>
