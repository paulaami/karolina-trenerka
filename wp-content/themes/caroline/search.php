<?php get_header();?>

<main>

  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-12">
        <h3>Wyniki wyszukiwana dla: <?php echo get_search_query(); ?></h3>
        <?php
    if (have_posts()):
      while (have_posts()): the_post();
      ?>
        <article class="main_blog_post_container" <?php post_class();?>>

          <div class="post-thumbnail">
            <?php 
        if( has_post_thumbnail() ):
          the_post_thumbnail('caroline-blog', array('class' => 'img-fluid')) ; 
          endif;
        ?>

          </div>
          <p class="blog__categories"><?php the_category( ' ' );?></p>

          <h2 class="post__title link-color">
            <a class="post__title-link link-color" href="<?php the_permalink();?>"><?php the_title();?></a>
          </h2>

          <div><?php the_excerpt();?></div>
          <a class="read-more-btn" href="<?php the_permalink();?>" role="button">Zobacz więcej</a>
        </article>
        <hr>

        <?php
    endwhile;
    the_posts_pagination( array(
      'prev_text' => 'Poprzednia',
      'next_text' => 'Następna',
    ));
    else:
    ?>
        <p>Brak wyników dla "<?php echo get_search_query(); ?>"</p>

        <?php endif;?>

      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>

</main>

<?php
get_footer();
?>