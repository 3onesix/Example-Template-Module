<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$module		 						= array(
	'name'							=> 'Photos',
	'simple_name'					=> 'starter_photos',
	'version'						=> '1.0',
	'settings'						=> array(
		array(
			'label' 				=> 'Include Tagging',
			'key'					=> 'include_tags',
			'type'					=> 'checkbox'
		)
	),
	'files'							=> array(
		array(
			'type'					=> 'model',
			'name'					=> 'photo_model.php',
			'include_on_page'		=> 1
		),
		array(
			'type'					=> 'model',
			'name'					=> 'album_model.php',
			'include_on_page'		=> 1
		),
		array(
			'type'					=> 'stylesheet',
			'name'					=> 'photos.css',
			'include_on_page'		=> 0
		)
	),
	'screens'						=> array(
		array(
			'name'					=> 'Photos',
			'url'					=> 'photos'
		),
		array(
			'name'					=> 'Albums',
			'url'					=> 'albums'
		)
	),
	'install'						=> 'install.php',
	//'update'						=> 'update.php'
);