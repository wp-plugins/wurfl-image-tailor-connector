<?php

    /*
        Plugin Name: WURFL Image Tailor (WIT) Connector
        Plugin URI: http://www.nevma.gr
        Description: Sets up the sources of your images so that they are served via the WURFL Image tailor service.
        Version: 0.9.04
        Author: Nevma - Creative Know-How
        Author URI: http://www.nevma.gr
        License: GPL2
        License URI: https://www.gnu.org/licenses/gpl-2.0.html
    */



    // Exit if accessed directly.

    if ( ! defined( 'ABSPATH' ) ) {

        exit; 

    }



    // The WURFL Image Tailor service endpoint url.

    define( 'WURFL_URL', '//wit.wurfl.io/' );



    // Adds the WURFL Image Tailor to a given image source.

    function nwda_wurfl_image_src ( $src ) {

        return WURFL_URL . $src;

    }



    // Filters an image's attributes so as to add the WURFL Image Tailor to its source.

    function nwda_wurfl_image_filter ( $attr ) {

        $attr['src'] = nwda_wurfl_image_src( $attr['src'] );

        return $attr;

    }



    // Filters the HTML content of a post in order to redirect the sources of its images to WURFL Image Tailor.

    function nwda_wurfl_content_filter ( $content ) {

        return preg_replace( '/src="(.*)"/i', 'src="' . WURFL_URL . '/${1}"', $content );

    }



    // Add the image source filters, but only in the frontend.

    if ( ! is_admin() ) {

        // Image attributes filter.

        add_filter( 'wp_get_attachment_image_attributes', 'nwda_wurfl_image_filter', 1, 1 );

        // Post content filter.

        add_filter( 'the_content', 'nwda_wurfl_content_filter', 1, 1 );
        
    }

?>