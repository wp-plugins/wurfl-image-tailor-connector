=== WURFL Image Tailor (WIT) Connector ===

Contributors: nevma
Donate link: http://www.nevma.gr/
Tags: wurfl, wit, cdn, device detection, mobile, image
Requires at least: 4.0
Tested up to: 4.1.1
Stable tag: 0.9.05
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sets up the sources of your images so that they are served via the WURFL Image tailor service (WIT) http://web.wurfl.io/#wit.



== Description ==

= Deliver downsized images to mobile devices =

WURFL Image Tailor (WIT) http://web.wurfl.io/#wit is an automatic image transformation and delivery service, based on the WURFL device detection library http://web.wurfl.io/#learnmore. WURFL will detect the device, and its screen size and it will resize and optimize (downsize) each image accordingly. 

This plugin hooks automatically into the WordPress HTML image code generation process and changes each image's src attribute, so that it is optimized for that specific device and delivered via the WURFL Image Tailor service. 

The plugin also filters the post contents to replace the src attribute of images in it. But it currently does this for all (!) images that it finds in the post contents. Right now it does not replace the href attribute of links that point to images in the media gallery.

Make sure you use functions like: 

 - `the_post_thumbnail(`&hellip;`)`
 - `wp_get_attachment_image(`&hellip;`)`
 - `the_content(`&hellip;`)`

However, do not use `wp_get_attachment_image_src()`, because we cannot hook into it (yet)! Right now the plugin hooks into these WordPress filters:

 - `wp_get_attachment_image_attributes`
 - `the_content`



== Installation ==

= No surprises here: =

 1. Install the plugin via "Plugins > Add New".
 2. Activate the plugin.
 3. It should simply work!
 4. De-activate the plugin to disable it.
 4. Activate the plugin to enable it.



== Frequently Asked Questions ==

= Is the WURFL Image Tailor service free? =

So far yes it is, but refer to http://web.wurfl.io/#wit for more info on this. This plugin is in no way affiliated to the service itself. It is a simple connector.

= Is the WURFL Image Tailor service production ready? =

Well, not totally. We have seen it producing 503 errors in some random cases. After all it is a free service (so far).



== Screenshots ==

1. Plugin is installed and activated.
2. Images are automatically delivered via the WURFL Image Tailor service.



== Upgrade Notice ==

No worries upgrading. Just do it! 



== Changelog ==

= 0.9.05 =

 - Documentation enhancements. 
 - Added empty index.php file for security.

= 0.9.04 =

 - Documentation enhancements. 
 - Added plugin banner and screenshots.

= 0.9.03 =

 - Minor code enhancements.

= 0.9.02 =

 - Minor code enhancements.

= 0.9.01 =

 - Minor code enhancements.

= 0.9 =

 - Plugin is working and published.