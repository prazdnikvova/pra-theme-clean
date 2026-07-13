<?php
/**
 * Pra Theme Clean — the bare minimum: setup, one stylesheet, nothing else.
 * The batteries-included sibling lives at github.com/prazdnikvova/pra-theme.
 */

/**
 * Theme supports, text domain and the primary menu location.
 *
 * @return void
 */
add_action( 'after_setup_theme', 'pra_clean_setup' );
function pra_clean_setup() {
	load_theme_textdomain( 'pra-theme-clean', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'comment-list', 'comment-form', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'responsive-embeds' );
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'pra-theme-clean' ),
		)
	);
}

/**
 * The single stylesheet (style.css), plus comment-reply on singular views
 * when threaded comments are open.
 *
 * @return void
 */
add_action( 'wp_enqueue_scripts', 'pra_clean_enqueue' );
function pra_clean_enqueue() {
	// filemtime as the version: editing the file busts the browser cache.
	wp_enqueue_style( 'pra-theme-clean', get_stylesheet_uri(), array(), (string) filemtime( get_stylesheet_directory() . '/style.css' ) );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
 * Accessibility: skip link straight after <body>.
 *
 * Hooked at priority 5 so it is the first focusable element on the page.
 *
 * @return void
 */
add_action( 'wp_body_open', 'pra_clean_skip_link', 5 );
function pra_clean_skip_link() {
	echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'pra-theme-clean' ) . '</a>';
}
