<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Jinx
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<main class="site-main" role="main">
  <div class="default-404-content">
    <div class="container">
        <div class="lakit-row">
            <div class="lakit-col default-404-content--img">
                <img src="<?php echo esc_url(get_theme_file_uri( '/assets/images/404.png' )); ?>" width="690" height="408" alt="<?php echo esc_html_x('Page not found !!', 'front-end', 'jinx') ?>" loading="lazy"/>
            </div>
            <div class="lakit-col default-404-content--content">
                <div class="default-404-content--inner">
                    <h4><?php echo esc_html_x('Page not found !!', 'front-end', 'jinx') ?></h4>
                    <p><?php echo esc_html_x("The page you are looking for might have been removed had it's name changed or is temporarily unavailable.", 'front-end', 'jinx') ?></p>
                    <div class="button-wrapper"><a class="button" href="<?php echo esc_url(home_url('/')) ?>"><?php echo esc_html_x('Go to home', 'front-view','jinx')?></a></div>
                </div>
            </div>
        </div>
    </div>
  </div>
</main>
