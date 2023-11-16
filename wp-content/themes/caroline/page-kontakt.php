<?php get_header();?>

<main>
  <section class="contact__section">
    <div class="contact__section-container">
      <div class="contact__section-photo">
        <img class="contact__section-img" src="<?php echo get_theme_file_uri('/img/Karolina-trenerka.jpg') ?>"
          alt="Zdjęcie Karoliny Szymkowicz">
      </div>

      <div class="contact__section-box">
        <h1 class="contact__section-heading">Formularz kontaktowy</h1>
        <p class="contact__section-text">Jeśli chcesz się ze mną skontaktować lub masz jakieś pytania, wypełnij proszę
          formularz lub napisz bezpośrednio na karolina.szymkowicz@wp.pl. Odezwę się najszybciej jak to tylko możliwe.
        </p>
        <div><?php the_content (); ?></div>
        <!-- <form action="karolina.szymkowicz@wp.pl" method="post">
          <label for="name">Imię:</label>
          <input type="text" id="name" name="user_name" required>
          <label for="mail">E-mail:</label>
          <input type="email" id="mail" name="user_email" required>
          <label for="msg">Wiadomość:</label>
          <textarea name="user_message" id="msg" cols="30" rows="10" required></textarea>
          <button type="submit" id="submit">Wyślij</button>
          </form> -->
      </div>
    </div>
  </section>

  <?php get_footer();?>