=== WordPress WURFL Image Tailor Connector ===

Contributors: nevma
Donate link: http://example.com/
Tags: wurfl, wit, cdn
Requires at least: 4.0
Tested up to: 4.1.1
Stable tag: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Sets up the sources of your images so that they are served via the WURFL Image tailor service (WIT) http://web.wurfl.io/#wit.

== Description ==

WURFL Image Tailor (WIT) http://web.wurfl.io/#wit is an automatic image transformation and delivery service, based on ther WURFL device detection library http://web.wurfl.io/#learnmore. WURFL will detect the device, and its screen size and it will resize and optimize the image accordingly. 

This plugin hooks automatically into the WordPress HTML image code generation process and changes the image src attribute so that they are optimized and delivered via the WURFL Image Tailor service. It also filters the post contents to replace the images src attribute.

Make sure you use functions like: 

 - `the_post_thumbnail()`
 - `wp_get_attachment_image()`

However, do not `wp_get_attachment_image_src()` because we cannot hook into it (yet)!

== Installation ==

1. Upload the plugin directory to the "/wp-content/plugins/" directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. It works! De-activate the plugin to disable it.

== Frequently Asked Questions ==

= Is the WURFL Image Tailor service free? =

So far yes it is, but refer to http://web.wurfl.io/#wit for more info on this. This plugin is in no way affiliated to the service itself. It is a simple connector.

= Is the WURFL Image Tailor service stable? =

Well, not totally. We have seen it producing 503 errors in some random cases.

== Screenshots ==

No screenshots.

== Upgrade Notice ==

= 0.9 =
This is the first working version of this plugin.

== Changelog ==

= 0.9 =
* Plugin is working and is published.
