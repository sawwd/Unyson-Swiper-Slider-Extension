<?php if (!defined('FW')) die('Forbidden');

/** Sub extensions will extend this class */
// require dirname(__FILE__) .'/includes/extends/population-method-interface.php';

class FW_Extension_Swiper_Slider extends FW_Extension_Slider_Default
{
	/**
	 * @internal
	 */
	public function _init()
	{
	}

	public function get_population_methods()
	{
		$collector = array( 'custom' => __( "Manually, I'll upload the images myself", "fw" ) );

		return $collector;
	}

	protected function _render( $atts, $content = null, $tag = '' ) {
		if ( ! empty( $atts['slider_id'] ) ) {
			return fw()->extensions->get( 'slider' )->render_slider( $atts['slider_id'],
				array(
					'width'  => empty( $atts['width'] ) ? 300 : $atts['width'],
					'height' => empty( $atts['height'] ) ? 200 : $atts['height'],
					'slider' => $atts['sli'],
				), apply_filters( 'fw_slider_add_shortcode_extra_data', array(), $atts ) );
		}
	}
}
