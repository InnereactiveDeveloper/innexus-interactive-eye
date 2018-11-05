<?php
/**
 * Innexus Module - Interactive Eye
 *
 * Innexus Interactive Eye Assets
 *
 * @since   1.0.0
 * @package XEYE
 */

//Enqueue scripts and styles.
function XEYE_enqueue() 
{
	wp_enqueue_script( 'innexus-eye-script', plugin_dir_url( __FILE__ ) . 'js/script.js' , array('jquery'), null, true );  
    wp_enqueue_style( 'innexus-eye-style', plugin_dir_url( __FILE__ ) . 'css/style.css' , array(), null );
    //wp_enqueue_style( 'innexus-eye-google-font', 'https://fonts.googleapis.com/css?family=Bevan' );
}
add_action('wp_enqueue_scripts', 'XEYE_enqueue');