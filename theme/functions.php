<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package example
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function example_styles() {
	wp_enqueue_style(
		'example-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'example_styles' );

add_action('phpmailer_init', function ($php_mailer) {
	$php_mailer->Host     = 'mailhog';
	$php_mailer->Port     = 1025;
	$php_mailer->From     = 'wordpress@localhost.test';
	$php_mailer->FromName = 'WordPress';
	$php_mailer->IsSMTP();
}, 10);

add_filter('wp_mail_from', fn ($email) => 'wordpress@localhost.test');

add_filter('wp_mail_from_name', fn ($name) => 'localhost');
