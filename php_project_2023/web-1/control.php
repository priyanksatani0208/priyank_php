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
				
			case '/signup':
			if(isset($_REQUEST['submit']))
			{
				$cust_name=$_REQUEST['cust_name'];
				$cust_email=$_REQUEST['cust_email'];
				$cust_mob_num=$_REQUEST['cust_mob_num'];
				$password=$_REQUEST['password'];
                $password=md5($password);				
				
				$arr=array("cust_name"=>$cust_name,"cust_email"=>$cust_email,"cust_mob_num"=>$cust_mob_num,"password"=>$password);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> 
					alert('sucessfully Register...')
					window.location='login';
					</script>";				
				}
				else
				{
					echo "";
				}
			}
				include_once('signup.php');
				break;
		       
			   
			case '/login':
			if(isset($_REQUEST['submit']))
				{
					$cust_email=$_REQUEST['cust_email'];
					$password=$_REQUEST['password'];
				    $password=md5($password);
					
					$where=array("cust_email"=>$cust_email,"password"=>$password);
					$run=$this->select_where('customer',$where);
					
					$res=$run->num_rows;   // check cond by rows
					if($res==1)           // 1 means true
					{
						
						
						echo "<script> 
							alert('Login Success') 
							window.location='home';
							</script>";
						
					}
					else
					{
						echo "Login Failed due wrong credebntial";
					}
				}
            include_once('login.php');
            break;			
		
			default:
				include_once('error.php');
		}
	}	
}
$obj=new control;
?>