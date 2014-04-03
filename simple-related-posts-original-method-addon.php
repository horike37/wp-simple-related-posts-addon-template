<?php 
/*
Plugin Name: WP Simple Related Posts Original Method Addon
Plugin URI: http://www.kakunin-pl.us/
Description: 
Author: horike takahiro
Version: 1.0
Author URI: http://www.kakunin-pl.us/


Copyright 2014 horike takahiro (email : horike37@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



add_action( 'sirp_target_option', 'srip_original_method_options' );
function srip_original_method_options($target) {
	echo '<label for="sirp_target_original_method"><input id="sirp_target_original_method" name="srp_options[target]" type="radio" '.checked( $target, 'Simple_Related_Posts_Addon', false ).' value="Simple_Related_Posts_Addon" />' . __( 'View Related Posts based on Original Method' ) . '</label>';
}

add_action( 'sirp_addon_requirement', 'sirp_addon_requirement_original_method' );
function sirp_addon_requirement_original_method() {
	require_once 'class-simple-related-posts-original-method-addon.php';
}