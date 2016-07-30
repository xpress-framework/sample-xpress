<?php
$labels = new Xpress_Taxonomy( 'label', 'Label', 'Labels', array(
	'hierarchical'               => true,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
) );

$labels->add_capabilities( 'administrator' );
