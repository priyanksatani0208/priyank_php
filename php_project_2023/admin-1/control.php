<?php
include_once('../web/model.php');

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
			if(isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$pass=md5($password);
				
				$where=array("email"=>$email,"password"=>$pass);
				$run=$this->select_where('admin',$where);
				
				$res=$run->num_rows; // check cond by rows
				if($res==1) // 1 means true
				{
					$_SESSION['admin']=$email;
					
					echo "<script> 
						alert('Login Success') 
						window.location='dashboard';
						</script>";
					
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credebntial') 
						window.location='index';
						</script>";
				}
			}
			
			include_once('index.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script> 
				alert('Logout Success'); 
				window.location='index';
				</script>";
			
			break;
			
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			case '/add_emp':
			include_once('add_emp.php');
			break;
			case '/404':
			include_once('404.php');
			break;
			case '/profile':
			include_once('profile.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_feedback':
			$feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			case '/manage_emp':
			$employee_arr=$this->selectall('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_contact':
			$contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			default:
			include_once('404.php');
			break;
			
			
		}
		
	}
}
$obj=new control;


?>