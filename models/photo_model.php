<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo_Model extends My_Model {
	
	function init()
	{
		$this->table_name('starter_photos');
		
		$this->validate('name', 'required');
		
		$this->has_attached_file('file', array(
			'url'  => 'uploads/{filename}',
			'path' => 'uploads/{filename}'
		));
		
		$this->belongs_to('album');
	}
	
}