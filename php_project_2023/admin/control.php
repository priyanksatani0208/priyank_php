<?php
  include_once('model.php');
  class control extends model
  {
  	
  	function __construct()
  	{
		session_start();
		model::__construct();
		
  		$path=$_SERVER['PATH_INFO'];

  		switch ($path)
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
						$_SESSION['admin']=$username;
						
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
  			
  			case '/manage_provider':
			$manage_provider_arr=$this->selectall('serviceprovider');
  			include_once('manage_provider.php');
  			break;
  			
  			case '/manage_feedback':
  			include_once('manage_feedback.php');	
  			break;
  			
  			case '/manage_contact':
			$manage_contact_arr=$this->selectall('contact');
  			include_once('manage_contact.php');	
  			break;
  			
  			case '/serviceprovider':
			if(isset($_REQUEST['submit']))
			{
				
				$sp_name=$_REQUEST['sp_name'];
				$sp_email=$_REQUEST['sp_email'];
				$sp_mob_num=$_REQUEST['sp_mob_num'];
				$sp_address=$_REQUEST['sp_address'];
				$sp_gender=$_REQUEST['sp_gender'];
				$password=$_REQUEST['password'];
				$password=md5($password);
				
				 $arr=array("sp_name"=>$sp_name,"sp_email"=>$sp_email,"sp_mob_num"=>$sp_mob_num,"sp_address"=>$sp_address,"sp_gender"=>$sp_gender,"password"=>$password);
				
				$res=$this->insert('serviceprovider',$arr);
				if($res)
				{
					echo "<script> alert('Add successfully....') </script>";				
				}
				else
				{
					echo "";
				}
			}
			
  			include_once('serviceprovider.php');	
  			break;
			
			case '/manage_customer':
  			include_once('manage_customer.php');	
  			break;
			
			case '/manage_payment':
  			include_once('manage_payment.php');	
  			break;
		
  			
  			default:
  				include_once('404.php');
  				break;
  		}
  	}
  }
  
 $obj=new control; 
?>