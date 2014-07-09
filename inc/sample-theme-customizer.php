<?php
/**
 * Contains sample structure for customizing the theme customization screen.
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 */

class Sample_Theme_Customizer {
	 /**
		* This hooks into 'customize_register' (available as of WP 3.4) and allows
		* you to add new sections and controls to the Theme Customize screen.
		*
		* Note: To enable instant preview, we have to actually write a bit of custom
		* javascript. See live_preview() for more.
		*
		* @see add_action('customize_register',$func)
		* @param \WP_Customize_Manager $wp_customize
		* @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
		* @since MyTheme 1.0
		*/
		public static function sample_customize_register($wp_customize){

			$wp_customize->add_section( 'company_section', array(
					'title' => __( 'Company' ),
					'priority' => 20,
					'capability' => 'edit_theme_options',
					'description' => __( 'Provides an easy way for users to add details like phone, email, address, etc. to their theme.' ),
			));

	}

}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'Sample_Theme_Customizer' , 'sample_customize_register' ) );