<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Album_Model extends My_Model {
	
	function init()
	{
		$this->table_name('starter_albums');
		
		$this->validate('name', 'required');
		
		$this->has_many('photos');
	}
	
}