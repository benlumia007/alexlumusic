<?php
/**
 * alexlumusic ( home-portfolio.php )
 *
 * @package     alexlumusic
 * @copyright   Copyright (C) 2017-2020. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */
?>
<div id="about" class="site-about">
	<div class="content-area">
		<div class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'About', 'alexlumusic' ); ?></h1>
			<span class="entry-description"><?php esc_html_e( 'Some of my recent works', 'alexlumusic' ); ?></span>
		</div>
		<div class="entry-content">
			<?php
				$query = new WP_Query( array( 'page_id' => get_theme_mod( 'about_section_dropdown' ) ) ); // phpcs:ignore
			?>
			<?php if ( $query->have_posts() ) { ?>
				<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>
						<div class="contact-content">
							<?php if ( '' != get_theme_mod( 'about_section_dropdown' ) ) {
								the_content();
							} ?>
						</div>
						<div class="post-thumbnail alignwide">
							<?php the_post_thumbnail( 'alexlumusic-large-thumbnails' ); ?>
						</div>
				<?php } ?>
					<?php wp_reset_postdata(); ?>
			<?php } ?>
		</div>
	</div>
</div>