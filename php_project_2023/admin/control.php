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
					$admin_email=$_REQUEST['admin_email'];
					$password=$_REQUEST['password'];
					$password=md5($password);
					
					$where=array("admin_email"=>$admin_email,"password"=>$password);
					$run=$this->select_where('admin',$where);
					
					$res=$run->num_rows; // check cond by rows
					if($res==1) // 1 means true
					{
						$_SESSION['email']=$admin_email;
						
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
		 	unset($_SESSION['email']);
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
			$manage_feedback_arr=$this->selectall('feedback');
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
			$manage_customer_arr=$this->selectall('customer');
  			include_once('manage_customer.php');	
  			break;
			
			case '/manage_payment':
			$manage_payment_arr=$this->selectall('payment');
  			include_once('manage_payment.php');	
  			break;
			
			 case '/delete':
			if(isset($_REQUEST['del_sp_id']))
			{
				$sp_id=$_REQUEST['del_sp_id'];
				$where=array("sp_id"=>$sp_id);
				$res=$this->delete_where('serviceprovider',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_provider';
						</script>";
				}
			}
			if(isset($_REQUEST['del_payment_id']))
			{
				$payment_id=$_REQUEST['del_payment_id'];
				$where=array("payment_id"=>$payment_id);
				$res=$this->delete_where('payment',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_payment';
						</script>";
				}
			}
		    if(isset($_REQUEST['del_feedback_id']))
			{
				$feedback_id=$_REQUEST['del_feedback_id'];
				$where=array("feedback_id"=>$feedback_id);
				$res=$this->delete_where('feedback',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_feedback';
						</script>";
				}
			}
			if(isset($_REQUEST['del_contact_id']))
			{
				$contact_id=$_REQUEST['del_contact_id'];
				$where=array("contact_id"=>$contact_id);
				$res=$this->delete_where('contact',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_contact';
						</script>";
				}
			}
			if(isset($_REQUEST['del_cust_id']))
			{
				$cust_id=$_REQUEST['del_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$res=$this->delete_where('customer',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_customer';
						</script>";
				}
			}
			case '/profile';
			include_once('profile.php');
			break;
  
            case '/status':			
			if(isset($_REQUEST['status_sp_id']))
			{
				$sp_id=$_REQUEST['status_sp_id'];
				$where=array("sp_id"=>$sp_id);
				
				
				$run=$this->select_where('serviceprovider',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('serviceprovider',$arr,$where);
					if($res) 
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_provider';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('serviceprovider',$arr,$where);
					if($res) 
					{
						
						echo "<script> 
							alert('Block Success') 
							window.location='manage_provider';
							</script>";
					}
				}
			}
			
  			default:
  				include_once('404.php');
  				break;
  		}
  	}
  }
  
 $obj=new control; 
?>