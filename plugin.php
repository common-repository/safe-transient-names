<?php
/*
Plugin Name: Safe Transient Names
Description: Provides a simple function for creating safe transient names.
Plugin URI: http://petercoughlin.com/
Version: 0.2
Author: Peter Coughlin
Author URI: http://petercoughlin.com/
License: GPLv2 or later

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

if ( !function_exists( 'get_safe_transient_name' ) ) :
function get_safe_transient_name( $transient, $limit = 45 ) {

	// enable changes to value of $limit..
	$limit = intval( apply_filters( 'get_safe_transient_name_limit', $limit ) );
	
	// If transient name is longer than $limit (45 chars) we MD5 it and add the
	// result on to whatever is left of the original name minus the length of
	// the MD5 hash plus an underscore (33 chars). Keeping the first part of
	// the original name will help identify the transient when debugging..
	if ( strlen( $transient ) > $limit ) {
		$preserved_length = $limit - 33;
		if ( $preserved_length > 0 )
			$transient = substr( $transient, 0, $preserved_length ) . '_' . md5( $transient );
		else
			$transient = md5( $transient );
	}
	return $transient;
}
endif;
