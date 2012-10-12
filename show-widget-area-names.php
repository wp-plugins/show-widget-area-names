<?php
/*
Plugin Name: Show Widget Area Names
Plugin URI: http://www.amplitudedesign.com
Description: Plugin to show the widget area names on non-admin pages and posts. This adds the title to widget $params['before_widget']. 
Version: 1.0.1
Author: Kevin Johnson
Author URI: http://www.amplitudedesign.com
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/**
 * This adds the name of the area to the 'before_widget'
 * @param array $params
 */
class ShowWidgetTitle{

function widget_show_title($params){
	// If the user can't manage options return $name	
	if (!current_user_can('edit_posts') )return($params);
	$params[0]['before_widget'] .= '<div class="adi-widget-area-name">'.$params[0]['name'].'&nbsp;<a target="_blank" href="'.site_url().'/wp-admin/widgets.php" title="'.$params[0]['name'].'" alt="'.$params[0]['name'].'">[edit]</a></div>';
	return($params);
}

function widget_show_title_load(){
//Only register on the non-admin pages of the site.
	if(current_user_can('edit_posts') && !is_admin()){
		add_filter("dynamic_sidebar_params",array(__CLASS__,'widget_show_title'));
	}
}

function widget_show_title_scripts(){
	if(current_user_can('edit_posts') && !is_admin()){
		wp_register_style('adi-widget-area-names',plugins_url().'/adi-show-widget-area-names/css/adi-show-widget-areas.css');
		wp_enqueue_style('adi-widget-area-names');
	}
}

}
if(!is_admin())add_action('plugins_loaded',array('ShowWidgetTitle','widget_show_title_load'));
if(!is_admin())add_action('wp_enqueue_scripts',array('ShowWidgetTitle','widget_show_title_scripts'));