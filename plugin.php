<?php
/**
* Plugin Name: AT News Scroller
* Plugin URI: http://abhashtech.com
* Description: Scroll latest post from certain category.
* Version: 0.1
* Author: AbhashTech
* Author URI: http://abhashtech.com
*/


// If plugin file is called directly, die!
if ( ! defined( 'WPINC' ) ) {
die("Ouch! You should not have called me like this!");
}

// Check if Redux plugin is active or not. If not active run it as framework
if ( !class_exists( 'Redux' ) && file_exists( dirname(__FILE__) . '/includes/framework/redux/admin-init.php' ) ) {
require_once( dirname(__FILE__) . '/includes/framework/redux/admin-init.php' );
}

// load the theme's options 
if ( !isset( $at_news_scroller ) && file_exists( dirname(__FILE__) . '/includes/view.php' ) ) {
require_once( dirname(__FILE__) . '/includes/view.php' );
}

?>