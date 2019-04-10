<?php 

/**
 * Styles & Script
 */
require_once get_template_directory().'/lib/enqueue.php';

/**
 * Theme Support
 */
require_once get_template_directory().'/lib/theme_support.php';


/**
 * Widget Register
 */
require_once get_template_directory().'/lib/sidebar-widget.php';


	
/**
 * VC elements
 */
if ( file_exists( get_template_directory().'/inc/vc-element.php')) {
	require_once get_template_directory() . '/inc/vc-element.php';
  }

	
/**
 * VC Elements Output 
 */
if ( file_exists( get_template_directory().'/inc/vc-element-output.php')) {
	require_once get_template_directory() . '/inc/vc-element-output.php';
  }


// **********************************************//
// ! Get menus dropdown
// *********************************************//

if( ! function_exists( 'industrious_get_menus_array') ) {
	function industrious_get_menus_array() {
		$industrious_menus = wp_get_nav_menus();
		$industrious_menu_dropdown = array();

		foreach ( $industrious_menus as $menu ) {

			$industrious_menu_dropdown[$menu->term_id] = $menu->name;

		}

		return $industrious_menu_dropdown;
	}
}






?>