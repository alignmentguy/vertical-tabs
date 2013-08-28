<?php
/*
Plugin Name: Vertical Content Tabs
Plugin URI: http://www.shorelinemediamarketing.com
Description: Plugin to show content in vertical tabs. Use shortcode "[vertical-tabs title="Headling"]"
Author: Chris Matthias
Version: 1.0
Author URI: http://www.shorelinemediamarketing.com
*/

if (!function_exists('vertical_tabs')) {
	function vertical_tabs() {
		wp_enqueue_script('vertical-tabs-js', plugins_url('js/foundation-section-custom.min.js', __FILE__) );
		wp_enqueue_style('vertical-tabs-css', plugins_url('css/vertical-tabs.css', __FILE__) );
		
		extract(shortcode_atts(array(
			'title' => ''
			)
			, $atts
			, $content = null
		));
		ob_start();

		?>
			<?php $content; ?>
			
		<?php
		
		$html = ob_get_clean();
		return $html;
		
	}
	add_shortcode('vertical-tabs','vertical_tabs');
	/*add_action('wp_enqueue_scripts','vertical_tabs');*/
	
}
?>