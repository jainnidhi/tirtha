<?php
/**
 * Sample implementation of the Custom Header feature.
 *
 * You can add an optional custom header image to header.php like so ...
 *
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-logo/
 *
 * @package Tirtha
 */

 function tirtha_custom_logo_setup() {
     $defaults = array(
         'height'      => 100,
         'width'       => 400,
         'flex-height' => true,
         'flex-width'  => true,
         'header-text' => array( 'site-title', 'site-description' ),
     );
     add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'tirtha_custom_logo_setup' );
