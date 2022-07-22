<?php
  
  class control
  {
	  function __construct()
	  {
		  $path=$_SERVER['PATH_INFO'];
		  
		  switch($path)
		  {
			  case '/index':
			  include_once('index.php');
			  break;
			  
			  case '/manage_contact':
			  include_once('manage_contact.php');
			  break;
			  
			  case '/manage_customer':
			  include_once('manage_customer.php');
			  break;
			  
			  case '/manage_feedback':
			  include_once('manage_feedback.php');
			  break;
			  
			  case '/manage_payment':
			  include_once('manage_payment.php');
			  break;
			  
			  case '/manage_product':
			  include_once('manage_product.php');
			  break;
			  
			  case '/add_product':
			  include_once('add_product.php');
			  break;
 
			  case '/profile':
			  include_once('profile.php');
			  break;
			  
			  case '/dashboard':
			  include_once('dashboard.php');
			  break;
			  
			  default:
			  include_once('404.php');
			  break;
		  }
	  }
  }
  
 $obj=new control;
?>