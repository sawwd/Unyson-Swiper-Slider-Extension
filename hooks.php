<?php if (!defined('FW')) die('Forbidden');

add_filter( 'fw_ext_slider_activated', function( $active_sliders ) {
	$active_sliders = array( 'swiper-slider' );

	return $active_sliders;
}, 10 );

add_filter( 'fw_slider_add_shortcode_extra_data', function( $extra_atts, $atts ) {
	return $atts;
}, 10, 2 );
