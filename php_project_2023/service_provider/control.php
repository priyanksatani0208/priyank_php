<?php
 include_once('model.php'); 
 
  class control extends model
  {
	  
	  function __construct()
	  {
		  session_start();
		  
		  model::__construct();
		  $path=$_SERVER['PATH_INFO'];
		  
		  switch($path)
		  {
			  case '/index':
			  include_once('index.php');
			  break;
			  
			  case '/manage_contact':
			  $manage_contact_arr=$this->selectall('contact');
			  include_once('manage_contact.php');
			  break;
			  
			  case '/manage_customer':
			  $manage_customer_arr=$this->selectall('customer');
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
			  
			  case '/add_service':
			  if(isset($_REQUEST['submit']))
			{
				
				$service_name=$_REQUEST['service_name'];
				$service_price=$_REQUEST['service_price'];
				
				$service_img=$_FILES['service_img']['name'];  
				$path='pic/'.$service_img;
				$dup_file=$_FILES['service_img']['tmp_name'];	
				move_uploaded_file($dup_file,$path);
				
				$service_desc=$_REQUEST['service_desc'];
				
				
				$arr=array("service_name"=>$service_name,"service_price"=>$service_price,"service_img"=>$service_img,"service_desc"=>$service_desc);
				
				$res=$this->insert('service',$arr);
				if($res)
				{
					echo "<script> alert('Add successfully....') </script>";				
				}
				else
				{
					echo "";
				}
			}
			  include_once('add_service.php');
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