<?php get_header(); ?>

<main>

  <div class="container container-single-page">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-12">
        <?php
      while (have_posts()): the_post();
        ?>

        <article class="main_blog_post_container" id="post-<?php the_ID(); ?>" <?php post_class();?>>
          <header>
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

              <?php if( has_category() ) ?>
              <p class="blog__categories"><?php the_category( ', ' ); ?></p>

              <h2 class="post__title link-color"><?php the_title(); ?></h2>
          </header>

          <div class="blog-post-content"><?php the_content(); ?></div>


          <p class="post-author">Autor: <?php the_author_posts_link(); ?></p>

        </article>
        <hr>
        <?php
          if( comments_open() || get_comments_number() ):
            comments_template();
          endif;

            endwhile;
        ?>
      </div>
      <?php get_sidebar(); ?>

    </div>
  </div>

</main>


<?php
get_footer();
?>