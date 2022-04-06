<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';

    if(function_exists('mi_funcion')):
        echo mi_funcion(); 
    endif;
    if(function_exists('mi_imagen')):
    
        echo mi_imagen();
    endif;
   if(function_exists('miga_pan')):
         miga_pan();
   endif


?>
  