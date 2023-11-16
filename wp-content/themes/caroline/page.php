<?php get_header(); ?>
<main>
  <div class="container">
    <?php 
  while( have_posts() ): the_post();
?>
    <article>
      <h1 class="page-heading"><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
      <?php
          if( comments_open() || get_comments_number() ):
            comments_template();
          endif;
        ?>
    </article>

    <?php 
endwhile;
?>
  </div>
  <div class="section__instagram-container padding-top">
    <h2 class="section__instagram-heading">Instagram</h2>
    <?php echo do_shortcode('[instagram-feed]'); ?>
  </div>
</main>
<?php get_footer(); ?>