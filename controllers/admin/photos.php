<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('application/libraries/Admin_Controller.php');

class Photos extends Admin_Controller {
	
	//controller
	public $controller_path 	= 'admin/photos';
	
	//module and model
	public $module_name			= 'starter_photos';
	public $content_model_name	= 'photo_model';
	
	//content
	public $content_singular 	= 'photo';
	
	//load other models
	private $models				= array('album_model');
	
	public function action_index()
	{
		//check to see that path is writable for photo upload
		$notice = null;
		if (!is_writable('uploads')) {
			$notice = 'Uploads directory is not writable';
		}
		
		parent::action_index(null, $notice);
	}
	
}