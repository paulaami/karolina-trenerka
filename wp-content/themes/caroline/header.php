<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preload" as="font" crossorigin="anonymous" type="font/otf" href="<?php echo get_theme_file_uri('/fonts/Quentin.otf'); ?>">
  <link rel="preload" as="font" crossorigin="anonymous" type="font/woff" href="<?php echo get_theme_file_uri('/fonts/quentin.woff'); ?>">
  <link rel="preload" as="font" crossorigin="anonymous" type="font/woff2" href="<?php echo get_theme_file_uri('/fonts/quentin.woff2'); ?>">
<?php wp_head();?>
</head>

<body <?php body_class();?>>
<a href="#" class="scrolltop-btn"><i class="fas fa-chevron-circle-up"></i></a>
  <nav class="nav" id="nav">
    <div class="nav__container">
      <div class="nav__menu">
        <button class="hamburger" type="button">
          <span class="hamburger__bar"></span>
          <span class="hamburger__bar"></span>
          <span class="hamburger__bar"></span>
        </button>
        <ul class="nav__list desktop">
          <li <?php if (is_front_page()) {
    echo 'class="current-menu-item"';
}
?> class="nav__list-item">
            <a href="<?php echo site_url() ?>" class="nav__list-link">Home</a>
          </li>

          <li <?php if (is_page('o-mnie')) {
    echo 'class="current-menu-item"';
}
?> class="nav__list-item">
            <a href="<?php echo site_url('/o-mnie') ?>" class="nav__list-link">O mnie</a>
          </li>

          <li <?php if (get_post_type() == 'post') {
    echo 'class="current-menu-item"';
}
?> class="nav__list-item">
            <a href="<?php echo site_url('/blog') ?>" class="nav__list-link">Blog</a>
          </li>

          <li <?php if (is_product() || is_shop() || is_checkout() || is_product_category() || is_cart()) {
    echo 'class="current-menu-item"';
}
?> class="nav__list-item">
            <a href="<?php echo site_url('/sklep') ?>" class="nav__list-link">Sklep</a>
          </li>

          <li <?php if (is_page('kontakt')) {
    echo 'class="current-menu-item"';
}
?> class="nav__list-item">
            <a href="<?php echo site_url('/kontakt') ?>" class="nav__list-link">Kontakt</a>
          </li>

        </ul>

        <ul class="nav__list mobile">
          <li class="nav__list-item">
            <a href="<?php echo site_url() ?>" class="nav__list-link">Home</a>
          </li>
          <li class="nav__list-item">
            <a href="<?php echo site_url('/o-mnie') ?>" class="nav__list-link">O mnie</a>
          </li>
          <li class="nav__list-item">
            <a href="<?php echo site_url('/blog') ?>" class="nav__list-link">Blog</a>
          </li>
          <li class="nav__list-item">
            <a href="<?php echo site_url('/sklep') ?>" class="nav__list-link">Sklep</a>
          </li>
          <li class="nav__list-item">
            <a href="<?php echo site_url('/kontakt') ?>" class="nav__list-link">Kontakt</a>
          </li>
        </ul>


        <div class="nav__icons">
        <?php get_search_form();?>
          <a href="https://www.instagram.com/karolina_trenerka/" target="_blank" class="nav__icons-link insta-icon"
              ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <circle cx="256" cy="255.833" r="80"></circle>
                <path
                  d="M177.805 176.887c21.154-21.154 49.28-32.93 79.195-32.93s58.04 11.838 79.195 32.992c13.422 13.42 23.01 29.55 28.232 47.55H448.5v-113c0-26.51-20.49-47-47-47h-288c-26.51 0-49 20.49-49 47v113h85.072c5.222-18 14.81-34.19 28.233-47.614zM416.5 147.7c0 7.07-5.73 12.8-12.8 12.8h-38.4c-7.07 0-12.8-5.73-12.8-12.8v-38.4c0-7.07 5.73-12.8 12.8-12.8h38.4c7.07 0 12.8 5.73 12.8 12.8v38.4zm-80.305 187.58c-21.154 21.153-49.28 32.678-79.195 32.678s-58.04-11.462-79.195-32.616c-21.115-21.115-32.76-49.842-32.803-78.842H64.5v143c0 26.51 22.49 49 49 49h288c26.51 0 47-22.49 47-49v-143h-79.502c-.043 29-11.687 57.664-32.803 78.78z"
                ></path></svg></a>
          <a href="https://www.facebook.com/Moving-well-to-feel-good-104945625010928/" target="_blank" class="nav__icons-link fb-icon"
              ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                  d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z"
                ></path></svg></a>
                  <a href="<?php echo wc_get_cart_url(); ?>" class="nav__icons-link cart-icon"
              ><svg class="svg__cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 36" style="enable-background:new 0 0 40 36;" xml:space="preserve"><g id="Page-1_4_" sketch:type="MSPage">
	<g id="Desktop_4_" transform="translate(-84.000000, -410.000000)" sketch:type="MSArtboardGroup">
                <path
                  d="M94.5,434.6h24.8l4.7-15.7H92.2l-1.3-8.9H84v4.8h3.1l3.7,27.8h0.1
			c0,1.9,1.8,3.4,3.9,3.4c2.2,0,3.9-1.5,3.9-3.4h12.8c0,1.9,1.8,3.4,3.9,3.4c2.2,0,3.9-1.5,3.9-3.4h1.7v-3.9l-25.8-0.1L94.5,434.6"
                ></path></svg></a>
                <span class="shop-items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                <div class="dropdown-list">
                <a href="<?php echo site_url('/moje-konto') ?>" class="nav__icons-link"
              ><img src="<?php echo get_theme_file_uri('/assets/svg/account.svg') ?>" class="account-icon" alt="ikona logowania"></a>
              <ul class="dropdown-list-ul">
                <li><a href="<?php echo site_url('/moje-konto') ?>">Zaloguj się</a></li>
              </ul>
              </div>
        </div>
      </div>
    </div>
  </nav>

  <header class="header">
    <a href="<?php echo site_url(); ?>">
    <div class="header__logo">
      <h1 class="header__logo-heading">Karolina Szymkowicz</h1>
      <h2 class="header__logo-text">moving well to feel good</h2></a>
    </div>
  </header>