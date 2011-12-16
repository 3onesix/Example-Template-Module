# Example/Template Module for 3onesix Starter CMS
The purpose of this module is to demonstrate the module system, and though a functioning module, it is not meant to be a "complete", production module.

## Controllers
Two admin controllers are including, demonstrating both a simple, no intervention controller and one that requires a bit more control over the convention.

### Properties
```php
//controller
public $controller_path 	= 'admin/albums';

//module and model
public $module\_name			= 'starter\_photos';
public $content\_model\_name	= 'album_model';

//content
public $content_singular 	= 'album';
```