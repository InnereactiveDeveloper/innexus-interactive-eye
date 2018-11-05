<?php
/**
 *
 * @link https://www.getinnexus.com
 * @since 1.0.0
 * @package XEYE
 *
 * Plugin Name: Innexus Interactive Eye
 * Plugin URI: https://www.getinnexus.com
 * Description: Innexus Interactive Eye
 * Author: Innexus by Innereactive
 * Author URI: https://www.getinnexus.com
 * Version: 1.04.01
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants.
 *
 * @since 1.0.0
 */
// Plugin version.
if ( ! defined( 'XEYE_VERSION' ) ) {
	define( 'XEYE_VERSION', '1.04.01' );
}

if ( ! defined( 'XEYE_NAME' ) ) {
	define( 'XEYE_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

if ( ! defined( 'XEYE_DIR' ) ) {
	define( 'XEYE_DIR', WP_PLUGIN_DIR . '/' . XEYE_NAME );
}

if ( ! defined( 'XEYE_URL' ) ) {
	define( 'XEYE_URL', WP_PLUGIN_URL . '/' . XEYE_NAME );
}

/**
 * Interactive Eye
 */
require_once( XEYE_DIR . '/interactive-eye/fields.php' );
require_once( XEYE_DIR . '/interactive-eye/index.php' );
require_once( XEYE_DIR . '/distribute/BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( __FILE__, 'InnereactiveDeveloper', "innexus-interactive-eye" );
}
