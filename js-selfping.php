<?php
/*
Plugin Name: Stop Self Pings
Plugin URI: http://www.joelsays.com/plugins/stop-self-ping/
Description: Stops self pings to your own posts in new posts.
Version: 1.1
Author: Joel James
Author URI: http://about.joelsays.com

License: GPL2 - http://www.gnu.org/licenses/gpl.txt
*/

function js_selfping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $jspings => $jsping )
		if ( 0 === strpos( $jsping, $home ) )
			unset($links[$jsping]);
}

add_action( 'pre_ping', 'js_selfping' );
?>
