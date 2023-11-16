<?php get_header();?>

<main>

  <div class="container">
    <!-- <h1><?php single_cat_title(); ?></h1> -->
    <div class="row">
      <div class="col-lg-9 col-md-8 col-12">
        <?php
  the_archive_title('<h2 class="article title">', '</h2>');

    if (have_posts()):
      while (have_posts()): the_post();
      ?>
        <article <?php post_class();?>>

          <div class="post-thumbnail">
            <?php 
        if( has_post_thumbnail() ):
          the_post_thumbnail('caroline-blog', array('class' => 'img-fluid')) ; 
          endif;
        ?>
            <div class="post_data">
              <div class="post_data-items">
                <p><?php echo get_the_date('j'); ?></p>
                <p><?php echo get_the_date('m'); ?></p>
                <p><?php echo get_the_date('Y'); ?></p>
              </div>
            </div>
          </div>
          <p class="blog__categories"><?php the_category( ', ' );?></p>

          <h2 class='post__title link-color'>
            <a class='post__title-link link-color' href="<?php the_permalink();?>"><?php the_title();?></a>
          </h2>

          <div><?php the_excerpt();?></div>
          <a class="read-more-btn" href="<?php the_permalink();?>">Czytaj więcej</a>
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
        <p>Nic do wyświetlenia</p>

        <?php endif;?>
      </div>
      <?php get_sidebar(); ?>

    </div>
  </div>

</main>

<?php
get_footer();
?>