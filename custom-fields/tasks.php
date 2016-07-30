<?php
new Xpress_Custom_Field_Group( array(
	'id' => 'tasks',
	'title' => 'Tasks',
	'fields' => array (
		array (
			'key' => 'field_579d15bf97d28',
			'label' => 'Done',
			'name' => 'done',
			'type' => 'true_false',
			'message' => '',
			'default_value' => 0,
		),
	),
	'options' => array (
		'position' => 'normal',
		'layout' => 'no_box',
		'hide_on_screen' => array (
		),
	),
	'menu_order' => 0,
) );
