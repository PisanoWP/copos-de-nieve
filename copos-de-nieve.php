<?php
/**
 * Plugin Name: Copos de Nieve
 * Version: v1.0.0
 * Plugin URI: https://github.com/PisanoWP/copos-de-nieve
 * Description: Copos de nieve cayendo por la pantalla
 * Author: Juan Carlos Gómez-Lobo
 * Author URI: https://github.com/PisanoWP/
 * Requires at least: 4.0
 * Tested up to: 6.2
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'includes/class-copos-de-nieve.php';

function copos_de_nieve() {
	$instance = copos_de_nieve::instance( __FILE__, '1.0.0' );	
	return $instance;

}

copos_de_nieve();