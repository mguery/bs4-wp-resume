<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Resume_Theme
 */

?>
  <!doctype html>
  <html <?php language_attributes(); ?>>

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> id="page-top">
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'resumetheme' ); ?>
      </a>

      <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Start Bootstrap</span>
            <span class="d-none d-lg-block">
              <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_theme_file_uri('/assets/img/profile.jpg'); ?>"
                alt="">
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#education">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <div class="container-fluid p-0">