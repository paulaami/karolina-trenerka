<?php

function karolina_files()
{
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Jost&family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Raleway:wght@300;400;500&display=swap',[], null);



        wp_enqueue_script('font-awesome', '//kit.fontawesome.com/b43780f406.js');

        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.6.0', true);
    
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.6.0', 'all');
    
        wp_enqueue_script('main-js', get_theme_file_uri('/assets/js/main.js'), null, '1.0', true);

        wp_enqueue_style('main-css', get_theme_file_uri('/css/main.css'), array(), 'all');
    

    

    if ( is_page('zapisy') ) {

        wp_enqueue_style( 'style-css', get_stylesheet_directory_uri() . '/css/style.css' );
        wp_enqueue_script('footer-js', get_stylesheet_directory_uri() . '/assets/js/footer.js', array(), null, true);
        wp_enqueue_script('scroll-js', get_stylesheet_directory_uri() . '/assets/js/smoothscroll.js', array(), null, true);
    }

}
add_action('wp_enqueue_scripts', 'karolina_files');


function my_register_script_method()
{
    wp_enqueue_script('jquery');
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
}
add_action('wp_enqueue_scripts', 'my_register_script_method');

function add_slickjs()
{
    wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    wp_enqueue_script('main-slickjs', get_stylesheet_directory_uri() . '/assets/js/slick.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_slickjs');

function add_aos()
{
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css');

    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array(), null, true);

    wp_enqueue_script('aos-custom-js', get_stylesheet_directory_uri() . '/assets/js/aos.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'add_aos');

add_theme_support('post-thumbnails');
add_image_size('caroline-blog', 960, 640, array('center', 'center'));




function add_woocommerce_support()
{
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 320,
        'single_image_width' => 320,
    ));
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    if (!isset($content_width)) {
        $content_width = 600;
    }
}
add_action('after_setup_theme', 'add_woocommerce_support');

function karolina_features()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'karolina_features');

/**
 * Show cart contents / total Ajax
 */
add_filter('woocommerce_add_to_cart_fragments', 'caroline_woocommerce_header_add_to_cart_fragment');

function caroline_woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

    ?>
	<span class="shop-items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
$fragments['span.shop-items'] = ob_get_clean();
    return $fragments;
}

add_action('widgets_init', 'caroline_sidebars');
function caroline_sidebars() {
    register_sidebar(array(
        'name'          => 'Caroline Sidebar',
        'id'            => 'caroline-sidebar-1',
        'description'   => 'Przeciągnij i upuść widżet tutaj',
        'before_widget' => '<div id="%1$s" class="%2$s widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
    ));
}

function wpdocs_custom_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*mail suggestion turn off*/

add_filter( 'wpforms_mailcheck_enabled', '__return_false' );