<?php
include_once('model.php');

class control extends model
{
	
	function __construct()
	{
		model:: __construct();
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/home':
			if(isset($_REQUEST['submit']))
			{
				$contact_name=$_REQUEST['contact_name'];
				$contact_email=$_REQUEST['contact_email'];
				$contact_message=$_REQUEST['contact_message'];
							
				
				$arr=array("contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_message"=>$contact_message);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('send contact') </script>";				
				}
				else
				{
					echo "";
				}
				
				
			}
				include_once('home.php');
				break;
				
			case '/services':
			if(isset($_REQUEST['submit']))
			{
				$contact_name=$_REQUEST['contact_name'];
				$contact_email=$_REQUEST['contact_email'];
				$contact_message=$_REQUEST['contact_message'];
							
				
				$arr=array("contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_message"=>$contact_message);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('send contact') </script>";				
				}
				else
				{
					echo "";
				}
				
				
			}
				include_once('services.php');
				break;
				
			case '/about':
			if(isset($_REQUEST['submit']))
			{
				$contact_name=$_REQUEST['contact_name'];
				$contact_email=$_REQUEST['contact_email'];
				$contact_message=$_REQUEST['contact_message'];
							
				
				$arr=array("contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_message"=>$contact_message);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('send contact') </script>";				
				}
				else
				{
					echo "";
				}
				
				
			}
				include_once('about.php');
				break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$contact_name=$_REQUEST['contact_name'];
				$contact_email=$_REQUEST['contact_email'];
				$contact_message=$_REQUEST['contact_message'];
							
				
				$arr=array("contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_message"=>$contact_message);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('send contact') </script>";				
				}
				else
				{
					echo "";
				}
			}
			
				include_once('contact.php');
				break;
		
			default:
				include_once('error.php');
		}
	}	
}
$obj=new control;
?>