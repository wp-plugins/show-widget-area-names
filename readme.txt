=== Plugin Name ===
Contributors: kmfj1
Tags: widgets
Requires at least: 3.4.1
Tested up to: 3.4.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to show the widget area names on non-admin pages and posts. This adds the title to widget $params['before_widget'].

== Description ==

Plugin to show the widget area names on non-admin pages and posts. This adds the title to widget $params['before_widget']. This will only display for the edit_posts capabilities. You must use print $params['before_widget'] in your widget definitions to view the area name.
If the widget area is empty then no widget area name is displayed.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `show-widget-area-names` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Change the included css file to your liking.

== Frequently Asked Questions ==

= How does it work? =

The plugin uses the formatting of properly setup widgets and appends the widget area name using before_widget.

== Screenshots ==

1. assets/screenshot1.jpg

== Changelog ==

= 1.0.1 =
* This is the major version.