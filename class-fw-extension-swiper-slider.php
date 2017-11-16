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
}
