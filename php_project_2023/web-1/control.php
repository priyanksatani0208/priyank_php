<?php

class control
{
	function __construct()
	{
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/home':
				include_once('home.php');
				break;
				
			case '/services':
				include_once('services.php');
				break;
				
			case '/about':
				include_once('about.php');
				break;
			
			case '/contact':
				include_once('contact.php');
				break;
		
			default:
				include_once('error.php');
		}
	}	
}
$obj=new control;
?>