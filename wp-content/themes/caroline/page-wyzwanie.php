<?php get_header();?>

<main>
  <div class="container">
    <h1 class="challange-title">Dołącz do mojego wyzwania!</h1>
    <div class="row">
      <div class="col-lg-9 col-md-8 col-12">

        <section class="challange__section">
          <div class="challange__section-container">
            <div class="challange__section-photo">
              <img class="challange__section-img" src="<?php echo get_theme_file_uri('/img/wyzwanie.png') ?>"
                alt="Zdjęcie Karoliny Szymkowicz">
            </div>

            <div class="challange__section-box flex-column">
              <h2 class="challange__section-heading challange-heading">Zapisy do wyzwania</h2>
              <?php the_content (); ?>
            </div>
          </div>
        </section>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

</main>

<?php get_footer();?>