<?php

class control
{
	function __construct()
	{
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/about':
				include_once('about.php');
				break;
				
				case '/dashboard':
				include_once('dashboard.php');
				break;
				
				case '/login':
				include_once('login.php');
				break;
				
				case '/services':
				include_once('services.php');
				break;
			
			
		}
		
	}
}
$obj=new control;
?>



