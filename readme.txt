=== Plugin Name ===
Contributors: Richards Toolbox
Donate link: http://richardstoolbox.com/
Tags: gzip, compression, compressed, speed, cache,http, loading, performance, server
Requires at least: 3.0.1
Tested up to: 4.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This handy tool checks if you have GZIP compression enabled, and makes it possible to turn on GZIP compression.

== Description ==

GZIP compression is bundling (zipping) pages on a web server before the page is sent to the visitor. 
This saves bandwidth and therefore increases the loading speed of the page significantly. 
The visitors' web browser then automatically unzips the pages. This compressing and unzipping only takes a fraction of a second. 

This plugin checks if your Wordpress site has GZIP compression enabled. Every time you run this check, your domain name will be sent to http://checkgzipcompression.com. We won’t sent any other private information.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `check-and-enable-gzip-compression.zip` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. The plugin will let you know it GZIP is enabled,
1. When GZIP is not enabled, you can enabled it via the tools menu.

== Frequently Asked Questions ==

= What is GZIP compression? =

GZIP compression is bundling (zipping) pages on a web server before the page is sent to the visitor. 
This saves bandwidth and therefore increases the loading speed of the page significantly. 
The visitors' web browser then automatically unzips the pages. This compressing and unzipping only takes a fraction of a second. 

GZIP compression is recommended for all types of text files such as: 
- HTML (.html) but also all types of dynamic HTML (such as extension .php, .aspx) 
- Textfiles (extension .txt) 
- CSS and Javascript (extensie .css and .js) 
- Webservices, such as WSDL, REST and JSON 

GZIP compression is not recommended for non-text files, such as graphical files and .zip files because it hardly saves space and can therefore increase the loading time.

= Why is GZIP compression important? =

GZIP compression saves 50% to 80% bandwidth and will therefore significantly increase the website's loading speed. 
The textfiles are compressed (zipped) on the web server after which the visitor's web browser will automatically unzip the files. This compressing and unzipping only takes a fraction of a second without the end user noticing. 

Just about all the large websites worldwide use GZIP compression. For and actual overview of GZIP usage nowadays please check our [statistics page](http://checkgzipcompression.com/stats/).

== Screenshots ==

1. When enabled the plugin will tell you if GZIP is enabled.
2. The detail page will show you details about the GZIP compression state. And will make it possible to enable GZIP compression.
3. When GZIP compression is enabled, the plugin will tell you so.
4. You’ll receive an alert when GZIP is enabled.

== Changelog ==

= 0.2 =
* Added preview modus for testing
* If enabled, only front-end is GZIP compressed, not admin area

= 0.1 =
* First version of the plugin.
