=== WURFL Image Tailor (WIT) Connector ===

Contributors: nevma
Donate link: http://www.nevma.gr/
Tags: wurfl, wit, cdn
Requires at least: 4.0
Tested up to: 4.1.1
Stable tag: 0.9.04
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sets up the sources of your images so that they are served via the WURFL Image tailor service (WIT) http://web.wurfl.io/#wit.



== Description ==

WURFL Image Tailor (WIT) http://web.wurfl.io/#wit is an automatic image transformation and delivery service, based on ther WURFL device detection library http://web.wurfl.io/#learnmore. WURFL will detect the device, and its screen size and it will resize and optimize the image accordingly. 

This plugin hooks automatically into the WordPress HTML image code generation process and changes the image src attribute so that they are optimized and delivered via the WURFL Image Tailor service. 

It also filters the post contents to replace the images src attribute. But it currently does this for all (!) images that it finds in the post contents.

It does not filter the href attribute of links that point to images in the media gallery (yet).

Make sure you use functions like: 

 - `the_post_thumbnail(...)`
 - `wp_get_attachment_image(...)`

However, do not use `wp_get_attachment_image_src()` because we cannot hook into it (yet)!

Right now the plugin hooks into these WordPress filters:

 - wp_get_attachment_image_attributes
 - the_content



== Installation ==

= No surprises here: =

 1. Install the plugin via "Plugins > Add New".
 2. Activate the plugin.
 3. It should simply work!
 4. De-activate the plugin to disable it.



== Frequently Asked Questions ==

= Is the WURFL Image Tailor service free? =

So far yes it is, but refer to http://web.wurfl.io/#wit for more info on this. This plugin is in no way affiliated to the service itself. It is a simple connector.

= Is the WURFL Image Tailor service production ready? =

Well, not totally. We have seen it producing 503 errors in some random cases. After all it is a free service (so far).



== Screenshots ==

1. Plugin is installed and activated.
2. Image sources are automatically delivered via the WURFL Image Tailor service.



== Upgrade Notice ==

No worries upgrading. Just do it! 



== Changelog ==

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