<form role= "search" class="searchform" id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label class="screen-reader-text" for="s">Szukaj:</label>
    <input type="text" class="search-field" name="s" id="s" placeholder="Szukaj" value="<?php echo get_search_query(); ?>">
    <input type="image" id="searchsubmit" class="searchsubmit" alt="Szukaj" src="<?php bloginfo( 'template_url' ); ?>/assets/svg/search.svg"/><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'twentysixteen' ); ?></span>
</form>
