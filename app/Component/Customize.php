<?php
/**
 * Initiator ( Customize.php )
 *
 * @package     Initiator
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://benjlu.com )
 */

/**
 * Table of Content
 *
 * 1.0 - Create a New Framework
 */
namespace AlexLuMusic\Component;

use Benlumia007\Backdrop\Contracts\Customize\Customize as CustomizeAbstract;

/**
 * 1.0 - Create a New Framework
 *
 * This will initialize te Backdrop Core Framework and will add all the necessary components and features
 * to the theme, such as Menu, Sidebar, and Global Layout.
 */
class Customize extends CustomizeAbstract {
	/**
	 * Register register_panels
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager customizer object.
	 */
	public function register_panels( $manager ) {
		$manager->add_panel( 'home_section', array(
			'title' => esc_html__( 'Home Section', 'alexlumusic' ),
			'priority' => 10,
		) );
	}

	/**
	 * Register register_sections
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager customizer object.
	 */
	public function register_sections( $manager ) {
		/**
		 * About Section
		 */
		$manager->add_section( 'about_section', array(
			'title' => esc_html__( 'About Section', 'alexlumusic' ),
			'panel' => 'home_section',
			'priority' => 10,
		) );

		/**
		 * Music Section
		 */
		$manager->add_section( 'music_section', array(
			'title'    => esc_html__( 'Music Section', 'alexlumusic' ),
			'panel'    => 'home_section',
			'priority' => 15,
		) );
	}

	/**
	 * Register register_settings
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager customizer object.
	 */
	public function register_settings( $manager ) {
		/**
		 * Abot Settings
		 */
		$manager->add_setting( 'about_section_display', array(
			'sanitize_callback' => 'Benlumia007\Backdrop\Helpers\Sanitize::checkbox',
		) );

		$manager->add_setting( 'about_section_title', array(
			'default'           => esc_html__( 'About', 'alexlumusic' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$manager->add_setting( 'about_section_description', array(
			'default'           => esc_html__( 'What You Should Know About Me!', 'alexlumusic' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$manager->add_setting( 'about_section_dropdown', array(
			'sanitize_callback' => 'Benlumia007\Backdrop\Helpers\Sanitize::dropdown',
		) );

		/**
		 * Music Settings
		 */
		$manager->add_setting( 'music_section_display', array(
			'sanitize_callback' => 'Benlumia007\Backdrop\Helpers\Sanitize::checkbox',
		) );

		$manager->add_setting( 'music_section_title', array(
			'default'           => esc_html__( 'About', 'alexlumusic' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$manager->add_setting( 'music_section_description', array(
			'default'           => esc_html__( 'What You Should Know About Me!', 'alexlumusic' ),
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$manager->add_setting( 'music_section_dropdown', array(
			'sanitize_callback' => 'Benlumia007\Backdrop\Helpers\Sanitize::dropdown',
		) );
	}

	/**
	 * Register register_controls
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object $manager customizer object.
	 */
	public function register_controls( $manager ) {
		/**
		 * About Control
		 */
		$manager->add_control( 'about_section_display', array(
			'label' => esc_html__( 'Enable About Section', 'alexlumusic' ),
			'type' => 'checkbox',
			'section' => 'about_section',
			'settings' => 'about_section_display',
		) );

		$manager->add_control( 'about_section_title', array(
			'label' => esc_html__( 'About Title', 'alexlumusic' ),
			'section' => 'about_section',
			'settings' => 'about_section_title',
			'priority' => 15,
		) );

		$manager->add_control( 'about_section_description', array(
			'label' => esc_html__( 'About Title', 'alexlumusic' ),
			'section' => 'about_section',
			'settings' => 'about_section_description',
			'priority' => 20,
		) );

		$manager->add_control('about_section_dropdown', array(
			'label'   => esc_html__( 'Custom Dropdown Pages', 'camaraderie' ),
			'section' => 'about_section',
			'settings' => 'about_section_dropdown',
			'type'    => 'dropdown-pages',
			'priority' => 25,
		) );

		/**
		 * Music Control
		 */
		$manager->add_control( 'music_section_display', array(
			'label' => esc_html__( 'Enable Music Section', 'alexlumusic' ),
			'type' => 'checkbox',
			'section' => 'music_section',
			'settings' => 'music_section_display',
		) );

		$manager->add_control( 'music_section_title', array(
			'label' => esc_html__( 'Music Title', 'alexlumusic' ),
			'section' => 'music_section',
			'settings' => 'music_section_title',
			'priority' => 15,
		) );

		$manager->add_control( 'music_section_description', array(
			'label' => esc_html__( 'Music Description', 'alexlumusic' ),
			'section' => 'music_section',
			'settings' => 'music_section_description',
			'priority' => 20,
		) );

		$manager->add_control('music_section_dropdown', array(
			'label'   => esc_html__( 'Custom Dropdown Pages', 'camaraderie' ),
			'section' => 'music_section',
			'settings' => 'music_section_dropdown',
			'type'    => 'dropdown-pages',
			'priority' => 25,
		) );
	}
}
