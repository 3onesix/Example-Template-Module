<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('application/libraries/Admin_Controller.php');

class Albums extends Admin_Controller {
	
	//controller
	public $controller_path 	= 'admin/albums';
	
	//module and model
	public $module_name			= 'starter_photos';
	public $content_model_name	= 'album_model';
	
	//content
	public $content_singular 	= 'album';
	
}