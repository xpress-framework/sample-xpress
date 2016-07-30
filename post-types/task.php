<?php
$task = new Xpress_Post_Type(
	_x( 'task', 'custom type slug', 'sample-xpress' ),
	_x( 'Task', 'custom type name (singular)', 'sample-xpress' ),
	_x( 'Tasks', 'custom type name (plural)', 'sample-xpress' ),
	array(
		'supports'      => array( 'title', 'editor' ),
		'menu_icon'     => 'dashicons-list-view',
		'menu_position' => 30,
		'show_ui'       => true,
	)
);

$task->add_capabilities( 'administrator' );
$task->taxonomy( 'label' );
$task->custom_field_group( 'tasks' );
