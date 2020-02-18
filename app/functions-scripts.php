<?php
/**
 * alexlumusic ( functions-scripts.php )
 *
 * @package     alexlumusic
 * @copyright   Copyright (C) 2020. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Define namespace
 */
namespace AlexLuMusic;

/**
 * Enqueue Scripts and Styles
 *
 * @since  1.0.0
 * @access public
 * @return void
 *
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * @link   https://developer.wordpress.org/reference/functions/wp_enqueue_script/
 */
add_action(
	'wp_enqueue_scripts',
	function() {
		/**
		 * This is the main stylesheet that is being enqueue. This should be used rather than using @import stylesheets.
		 */
		wp_enqueue_style( 'alexlumusic-style', get_stylesheet_uri(), array(), '1.0.0' );

		# wp_enqueue_script( 'alexlumusic-scroll', get_theme_file_uri( '/assets/js/scroll.js' ), array( 'jquery' ), '1.0.0', true );

		/**
		 * This allows users to comment by clicking on reply so that it gets nested.
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
);

add_action(
	'wp_enqueue_scripts',
	function() {
		$text_color = get_header_textcolor();
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $text_color ) {
			return;
		}
		$value      = display_header_text() ? sprintf( 'color: #%s', esc_html( $text_color ) ) : 'display: none;';
		$custom_css = "
			.site-branding .site-title a,
			.site-description {
				{$value}
			}
		";
		wp_add_inline_style( 'alexlumusic-style', $custom_css );
	}
);

add_action(
	'wp_enqueue_scripts', function() {
		$custom_image = esc_url( get_theme_mod( 'custom_image', get_theme_file_uri( '/assets/images/header-image.jpg' ) ) );
	
		$custom_css = "      
			.site-header {
				padding-top: 15em;
				min-height: 100vh;
			}  
			.site-header.custom-image {
				background: url({$custom_image});
				background-attachment: fixed;
				background-position: center;
			}
		";
		wp_add_inline_style( 'alexlumusic-style', $custom_css );
	}
);

add_action(
	'enqueue_block_editor_assets',
	function() {
		wp_enqueue_style( 'alexlumusic-custom-fonts', get_theme_file_uri( '/vendor/benlumia007/backdrop-core/assets/fonts/custom-fonts.css' ), array(), '1.0.0' );
	}
);