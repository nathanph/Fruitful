<?php
/**
 * Content wrappers
 *
 * @author 		Fruitful
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$template = get_option( 'template' );

switch( $template ) {
	case 'twentyeleven' :
		echo '<div id="primary"><div id="content" role="main">';
		break;
	case 'twentytwelve' :
		echo '<div id="primary" class="site-content"><div id="content" role="main">';
		break;
	case 'twentythirteen' :
		echo '<div id="primary" class="site-content"><div id="content" role="main" class="entry-content twentythirteen">';
		break;
	case 'twentyfourteen' :
		echo '<div id="primary" class="content-area"><div id="content" role="main" class="site-content twentyfourteen"><div class="tfwc">';
		break;
	case 'fruitful' :
		if (fruitful_get_shop_sidebar() == 1){
			echo '<div class="sixteen columns woo-loop-content alpha omega"><div id="container"><div id="content" role="main">';
		} elseif(fruitful_get_shop_sidebar() == 2) {
			echo '<div class="eleven columns woo-loop-content omega"><div id="container"><div id="content" role="main">';
		} else {
			echo '<div class="eleven columns woo-loop-content alpha"><div id="container"><div id="content" role="main">';
		}
		break;
	default :
		echo '<div id="container"><div id="content" role="main">';
		break;
}