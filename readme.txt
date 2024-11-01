=== Plugin Name ===
Contributors: jayminkapish
Donate link:
Tags: search, instant search, tags search, category search, wp instant search, wordpress instant search
Requires at least: 2.9.2
Tested up to: 3.0.1
Stable tag: trunk

WP Instant Search looks for matched tags and categories on your blog and suggest to readers which improves search experiece.

== Description ==
WP Instant Search looks for matched tags and categories on your blog and suggest to readers which improves search experiece. 

Plugin loads following JavaScript files in the <head> tag of your theme:

1. jQuery
2. jQuery Suggest
3. Instant Search

== Installation ==

This section describes how to install the plugin and get it working.

1. Download the plugin 
2. Upload to wp-contents/plugins directory 
3. Activate and enjoy!
4. Make sure you have Search Form in your Theme and Input Element for Search has id 's'

Plugin works only if you have search form template used in the blog theme and search input element id is "s"
Example of search input element

&lt;input type=&quot;text&quot; value=&quot;&quot; name=&quot;s&quot; id=&quot;s&quot;&gt;

== Frequently Asked Questions ==

== Screenshots ==

1. How it hooks into your blog search

== Changelog ==

= 0.1 =
  * Plugin Launch
  
= 1.0 =
  * cursor:pointer; css change
  * $_SERVER['REQUEST_METHOD'] and $_GET["action"] validation in Search API 

= 1.1 =
  * suggest added as instant search js dependency

== Upgrade Notice ==

= 1.0 =
  * Minor css fixes and API validation.
= 1.1 =
  * jQuery suggest added as instant search js dependency
