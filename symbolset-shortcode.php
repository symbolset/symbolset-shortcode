<?php
/*
Plugin Name: Symbolset Shortcode
Plugin URI: http://wordpress.org/extend/plugins/symbolset-shortcode
Description: Adds an [icon] shortcode for inserting a Symbolset icon into your content.
Version: 1.0
Author: Symbolset
Author URI: http://symbolset.com
License: GPLv2

Copyright 2014 Symbolset (info@symbolset.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or (at
your option) any later version.This program is distributed in the hope
that it will be useful, but WITHOUT ANY WARRANTY; without even the
implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

if ( ! defined( 'ABSPATH' ) ) exit;


/**
 * Creates an [icon] shortcode.
 *
 * Usage:
 *
 * [icon]keyword[icon]
 * or [icon class="custom-class"]keyword[icon]
*/
function symbolset_shortcode( $atts, $content ) {
    $a = shortcode_atts( array('keyword' => '', 'class' => ''), $atts );

    if($a['class']){
      $custom_class = ' ' . esc_attr($a['class']);
    } else {
      $custom_class = '';
    }

    return '<span class="ss-icon'. $custom_class .'">' . $content . '</span>';
}
add_shortcode( 'icon', 'symbolset_shortcode' );

?>