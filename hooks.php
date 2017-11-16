<?php if (!defined('FW')) die('Forbidden');

add_filter( 'fw_ext_slider_activated', function( $active_sliders ) {
	$active_sliders = array( 'swiper-slider' );

	return $active_sliders;
}, 10 );
