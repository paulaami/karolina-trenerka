<?php get_header();?>

<div class="content-area">
  <main>
    <div class="container">
      <div class="error-404">
        <header>
          <h1>Nie znaleziono strony</h1>
          <p>Strona, której szukasz nie istnieje.</p>
        </header>
        <?php the_widget('WP_Widget_Recent_Posts',
    array(
        'title' => 'Sprawdź najnowsze posty',
        'number' => 3,
    ));?>
      </div>
      <div class="section__instagram-container">
        <h2 class="section__instagram-heading">Instagram</h2>
        <?php echo do_shortcode('[instagram-feed]'); ?>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();
?>