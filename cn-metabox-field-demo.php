<?php
/*
Plugin Name: Connections Custom Metabox and field API Demo
Plugin URI: http://connections-pro.com
Description: This plugin demos the new custom metabox and field API.
Version: 1.0
Author: Steven A. Zahm
Author URI: http://connections-pro.com
*/

/**
 * Copyright (c) 2013 Steven A. Zahm. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */

add_action( 'cn_loaded', 'runCustomMetaboxFieldDemo' );

function runCustomMetaboxFieldDemo(){
	add_action( 'cn_metabox', 'cnCustomMetaboxFieldDemo', 10, 1 );
}

function cnCustomMetaboxFieldDemo() {

	$prefix = 'cn-demo-';

	$metaboxes[] = array(
		'id'         => 'test_metabox_one',
		'title'      => 'Metabox One',
		'context'    => 'normal',
		'priority'   => 'core',
		'sections'   => array(
			array(
				'name'       => 'Section One',
				'desc'       => 'The custom metabox / field API supports adding multiple sections to a metabox.',
				'fields'     => array(
					array(
						'name'       => 'Test Text - SMALL',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => $prefix . 'test_text_small',
						'type'       => 'text',
						'size'       => 'small',
					),
					array(
						'name'       => 'Test Text - REGULAR',
						'show_label' => FALSE, // Show field label
						'desc'       => 'field description',
						'id'         => $prefix . 'test_text_regular',
						'type'       => 'text',
						'size'       => 'regular',
					),
					array(
						'name'       => 'Test Text  - LARGE',
						'desc'       => 'field description',
						'id'         => $prefix . 'test_text_large',
						'type'       => 'text',
					),
				),
			),
			array(
				'name' => 'Section Two',
				'desc'       => 'The custom metabox / field API supports text input fields with multiple sizes that match WordPress core.',
				'fields' => array(
					array(
						'name'       => 'Test Text - SMALL',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => $prefix . 'test_text_small_1',
						'type'       => 'text',
						'size'       => 'small',
						'default'    => 'SMALL',
					),
					array(
						'name'       => 'Test Text - REGULAR',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => $prefix . 'test_text_regular_1',
						'type'       => 'text',
						'size'       => 'regular',
						'default'    => 'REGULAR',
					),
					array(
						'name'       => 'Test Text  - LARGE',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => $prefix . 'test_text_large_1',
						'type'       => 'text',
						'default'    => 'LARGE',
					),
				),
			),
		),
	);

	$metaboxes[] = array(
		'id'         => 'test_metabox_two',
		'title'      => 'Metabox Two',
		'context'    => 'normal',
		'priority'   => 'core',
		'sections'   => array(
			array(
				'name' => 'Checkboxes',
				'desc' => 'We can display both single checkboxes and checkbox groups.',
				'fields' => array(
					array(
						'name'       => 'Checkbox',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'checkbox_test',
						'type'       => 'checkbox',
					),
					array(
						'name'       => 'Checkbox Group',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'checkboxgroup_test',
						'type'       => 'checkboxgroup',
						'options'    => array(
								'option_one'   => 'Option One',
								'option_two'   => 'Option Two',
								'option_three' => 'Option Three',
							),
					),
				),
			),
			array(
				'name' => 'Radio Groups',
				'desc' => 'We can display both radio groups vertically and horizontally.',
				'fields' => array(
					array(
						'name'       => 'Horizontal Radio Group',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'radiogroup_inline_test',
						'type'       => 'radio_inline',
						'options'    => array(
								'option_one'   => 'Option One',
								'option_two'   => 'Option Two',
								'option_three' => 'Option Three',
							),
						'default'    => 'option_two',
					),
					array(
						'name'       => 'Vertical Radio Group',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'radiogroup_test',
						'type'       => 'radio',
						'options'    => array(
								'option_one'   => 'Option One',
								'option_two'   => 'Option Two',
								'option_three' => 'Option Three',
							),
					),
				),
			),
			array(
				'name' => 'Drops Downs',
				'desc' => 'Multiple types of drop downs are supported. Single Select, Multi-Select, Enhanced Single Select and Enhanced Multi-Select.',
				'fields' => array(
					array(
						'name'       => 'Single Select',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'single_select_test',
						'type'       => 'select',
						'options'    => array(
								'option_one'   => 'Option One',
								'option_two'   => 'Option Two',
								'option_three' => 'Option Three',
							),
					),
				),
			),
		),
	);

	$metaboxes[] = array(
		'id'         => 'test_metabox_three',
		'title'      => 'Metabox Three',
		'context'    => 'normal',
		'priority'   => 'core',
		'sections'   => array(
			array(
				'name' => 'Text Editors',
				'desc' => 'There are two textarea sizes matching the WordPress Core..',
				'fields' => array(
					array(
						'name'       => 'Textarea Regular',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'textarea_test',
						'type'       => 'textarea',
					),
					array(
						'name'       => 'Textarea Large',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'textarea_large_test',
						'type'       => 'textarea',
						'size'       => 'large',
					),
				),
			),
			array(
				'name' => 'Text Editors',
				'desc' => 'The custom metabox / field API support creating both QuickTag and Rich Text Editor fields.',
				'fields' => array(
					array(
						'name'       => 'QuickTags',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'quicktag_test',
						'type'       => 'quicktag',
					),
					array(
						'name'       => 'WP Editor',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'rte_test',
						'type'       => 'rte',
						'size'       => 'regular',
					),
				),
			),
		),
	);

	$metaboxes[] = array(
		'id'         => 'test_metabox_four',
		'title'      => 'Metabox Four',
		'context'    => 'normal',
		'priority'   => 'core',
		'sections'   => array(
			array(
				'name' => 'Advanced Fields',
				'desc' => 'The custom metabox / field API also supports datapickers, sliders and ...',
				'fields' => array(
					array(
						'name'       => 'Date Picker',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'datepicker_test',
						'type'       => 'datepicker',
					),
					array(
						'name'       => 'Slider',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'slider_test',
						'type'       => 'slider',
						'options'    => array(
							'min'        => 0,
							'max'        => 100,
							'step'       => 5,
						),
						'default'    => 37,
					),
				),
			),
		),
	);

	/*$metaboxes[] = array(
		'id'         => 'test_metabox_five',
		'title'      => 'Metabox Five',
		'context'    => 'normal',
		'priority'   => 'core',
		'sections'   => array(
			array(
				'name' => 'Repeatable Fields',
				'desc' => 'The API is extremely flexible allowing the creation of repeating fields.',
				'fields' => array(
					array(
						'name'       => 'Repeatable',
						'show_label' => TRUE, // Show field label
						'desc'       => 'field description',
						'id'         => 'repeatable_test',
						'type'       => 'repeatable',
						'repeatable' => array( // array of fields to be repeated
							'featured' => array(
								'name' => 'Featured?',
								'id'    => 'featured',
								'type'  => 'checkbox'
							),
							array( // Image ID field
								'name'	=> 'Image', // <name>
								'id'	=> 'image', // field id and name
								'type'	=> 'image' // type of field
							),
							'title' => array(
								'name' => 'Title',
								'id'    => 'title',
								'type'  => 'text'
							),
							'desc' => array(
								'name' => 'Description',
								'id'    => 'desc',
								'type'  => 'textarea'
							)
						),
					),
				),
			),
		),
	);*/

	foreach ( $metaboxes as $atts ) {

		cnMetaboxAPI::add( $atts );
	}
}
