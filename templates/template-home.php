<?php
/**
 * alexlumusic ( template-home.php )
 * Template Name: Home
 *
 * @package     alexlumusic
 * @copyright   Copyright (C) 2017-2020. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */
$about_display = get_theme_mod( 'about_section_display' );
$music_display      = get_theme_mod( 'music_section_display' );
$contact_display   = get_theme_mod( 'custom_contact_display' );
?>
<?php get_header(); ?>
	<?php if ( 0 != $about_display && isset( $about_display ) ) { // phpcs:ignore ?>
		<?php get_template_part( 'views/section/home', 'about' ); ?>
	<?php } ?>
	<?php if ( 0 != $music_display && isset( $music_display ) ) { // phpcs:ignore ?>
		<?php get_template_part( 'views/section/home', 'music' ); ?>
	<?php } ?>
	<?php if ( 0 != $contact_display && isset( $contact_display ) ) { // phpcs:ignore ?>
		<?php get_template_part( 'views/section/home', 'contact' ); ?>
	<?php } ?>
<?php get_footer();