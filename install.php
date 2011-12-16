<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function install()
{
	create_table('starter_photos', array(
		array('name' => 'starter_album_id', 'type' => 'integer'),
		array('name' => 'name', 'type' => 'string'),
		array('name' => 'description', 'type' => 'binary'),
		array('name' => 'file_file_name', 'type' => 'string'),
		array('name' => 'file_content_type', 'type' => 'string'),
		array('name' => 'file_file_size', 'type' => 'integer'),
		array('name' => 'file_updated_at', 'type' => 'integer'),
		MIGRATION_TIMESTAMPS
	));
	create_table('starter_albums', array(
		array('name' => 'name', 'type' => 'string'),
		array('name' => 'description', 'type' => 'binary'),
		MIGRATION_TIMESTAMPS
	));
}

install();