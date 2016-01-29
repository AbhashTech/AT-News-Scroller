<?php

        function at_scroll_plugin_compiler_file( $options, $css, $changed_values ) {
		    global $wp_filesystem;
		    $filename = dirname(__FILE__) . '/../style/style.css';
		    $data = $options;
		    ob_start(); // Capture all output (output buffering)

			require('style.php'); // Generate CSS

			$cssa = ob_get_clean(); // Get generated CSS (output buffering)
		 	ob_end_flush();

		    if( empty( $wp_filesystem ) ) {
		        require_once( ABSPATH .'/wp-admin/includes/file.php' );
		        WP_Filesystem();
		        
		    }
		 
		    if( $wp_filesystem ) {
		        $wp_filesystem->put_contents(
		            $filename,
		            $cssa,
		            FS_CHMOD_FILE // predefined mode settings for WP files
		        );
		    }
        }



add_action( 'at_ticker_code', 'at_scroll_plugin_mod' );
function at_scroll_plugin_mod() {
  	global $at_news_scroller;
	$get_option_speed = $at_news_scroller['opt-speed']; 
	
?>
		<script>
			var speed = <?php echo $get_option_speed; ?>;
		</script>
<?php
	
	require_once(dirname(__FILE__)."/ticker.php");
}

define('AT_NEWS_PLUGIN_URL',  plugin_dir_url(__FILE__) );   
define('CSS_URL', AT_NEWS_PLUGIN_URL . '../style/style.css');  
// Add header hook for user to load css by plugin
add_action('wp_head','hook_css');
function hook_css() {
	  	echo  "<link rel='stylesheet' href='". CSS_URL ."' type='text/css' media='all' />". "\n" ;	  
	  	wp_register_script( 'at_ticker_jquery_js', AT_NEWS_PLUGIN_URL."../js/jquery-2.1.1.min.js" ,array('jquery'),"2.1.1",true);
	  	wp_enqueue_script( 'at_ticker_jquery_js');	
		wp_register_script( 'at_ticker_init_js', AT_NEWS_PLUGIN_URL."../js/init.js" ,array('jquery'),"2.1.1",true);
  		wp_enqueue_script( 'at_ticker_init_js');
}
?>