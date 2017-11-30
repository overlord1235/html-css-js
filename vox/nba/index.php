<?php 
use App\Core\{Router,Request,Session};

require 'vendor/autoload.php';
require 'core/boostrap.php';

Session::init();
if (isset($_SESSION['admin']))
	$file='app/routes.php';
else 
	$file='app/normalroutes.php';

Router :: load ($file)
	->direct(Request::uri(),Request::method());



?>