<?php

    /*
        Plugin Name: WURFL Image Tailor (WIT)
        Plugin URI: http://www.nevma.gr
        Description: Sets up the sources of your images so that they are served via the WURFL Image tailor service.
        Version: 0.9.05
        Author: Nevma - Creative Know-How
        Author URI: http://www.nevma.gr
        License: GPL2
        License URI: https://www.gnu.org/licenses/gpl-2.0.html
    */



    // Exit if file is accessed directly.

    if ( ! defined( 'ABSPATH' ) ) {

        exit; 

    }



    // The WURFL Image Tailor service endpoint url.

    define( 'WURFL_URL', '//wit.wurfl.io/' );



    /**
     * Adds the WURFL Image Tailor service endpoint url to a given image source.
     * 
     * This function takes an image source url and it adds the WURFL Image Tailor service url in front of it so that
     * the image will be served by it. The service will make sure that each device will receive a copy of the image
     * relative to its screen size.
     * 
     * @param $src The url source of an image to pass through the WURFL Image Tailor service.
     * 
     * @return The new url of the image.
     */

    function nwda_wurfl_image_src ( $src ) {

        return WURFL_URL . $src;

    }



    /**
     * Filters an image's attributes so as to add the WURFL Image Tailor to its source. 
     * 
     * The image's attributes are usually an array returned via functions like wp_get_attachment_image_src(). This 
     * functions hooks into the wp_get_attachment_image_attributes filter in order to change the source url of the 
     * given image as necessary.
     * 
     * @param $src The url source of an image to pass through the WURFL Image Tailor service.
     * 
     * @return The new url of the image.
     */

    function nwda_wurfl_image_filter ( $image_attr ) {

        $image_attr['src'] = nwda_wurfl_image_src( $image_attr['src'] );

        return $image_attr;

    }



    /**
     * Filters the HTML contents of a post in order to redirect the sources of its images to WURFL Image Tailor.
     * 
     * This functions takes the HTML contents of a post and filters it so that that the src attrbutes of images that
     * are found in it are replaced in order to be redirected to the WURFL Image Tailor service.
     * 
     * @param $content The HTML contents of a post.
     * 
     * @return The post contents with image src attributes replaced.
     */

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