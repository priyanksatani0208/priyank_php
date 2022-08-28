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
			  if(isset($_REQUEST['submit']))
			{
				$sp_email=$_REQUEST['sp_email'];
				$password=$_REQUEST['password'];
				$password=md5($password);
				
				$where=array("sp_email"=>$sp_email,"password"=>$password);
				$run=$this->select_where('serviceprovider',$where);
				
				$res=$run->num_rows; // check cond by rows
				if($res==1) // 1 means true
				{
					$_SESSION['email']=$sp_email;
					
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
			  
			case '/serviceprovider_logout':
			unset($_SESSION['email']);
			echo "<script> 
				alert('Logout Success'); 
				window.location='index';
				</script>";
			
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
			  $manage_feedback_arr=$this->selectall('feedback');
			  include_once('manage_feedback.php');
			  break;
			  
			case '/delete':
			if(isset($_REQUEST['del_contact_id']))
			{
				$contact_id=$_REQUEST['del_contact_idsss'];
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
			if(isset($_REQUEST['del_service_id']))
			{
				$service_id=$_REQUEST['del_service_id'];
				$where=array("service_id"=>$service_id);
				$res=$this->delete_where('service',$where);
				if($res) // 1 means true
				{
					echo "<script> 
						alert('Delete Success') 
						window.location='manage_service';
						</script>";
				}
			}
			break;
			  
			  case '/manage_payment':
			  $manage_payment_arr=$this->selectall('payment');
			  include_once('manage_payment.php');
			  break;
			  
			  case '/manage_service':
			  $manage_service_arr=$this->selectall('service');
			  include_once('manage_service.php');
			  break;
			  
			  case '/add_service':
			  if(isset($_REQUEST['submit']))
			{
				$service_name=$_REQUEST['service_name'];
				$service_price=$_REQUEST['service_price'];
				$service_desc=$_REQUEST['service_desc'];
				
				$service_img=$_FILES['service_img']['name'];
				$path='pic/'.$service_img;
				$dup_file=$_FILES['service_img']['tmp_name'];
				move_uploaded_file($dup_file,$path);
				
		 		$arr=array("service_name"=>$service_name,"service_price"=>$service_price,"service_desc"=>$service_desc,"service_img"=>$service_img);
				
				$res=$this->insert('service',$arr);
				if($res)
				{
					echo "<script> alert('Register successfully')</script>";
				}
				else
				{
					echo "<script>Not successfully</script>";
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
			  
			case '/status':
			
			if(isset($_REQUEST['status_cust_id']))
			{
				$cust_id=$_REQUEST['status_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('customer',$arr,$where);
					if($res) 
					{
						echo "<script> 
							alert('Unblock Success') 
							window.location='manage_customer';
							</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('customer',$arr,$where);
					if($res) 
					{
						
						echo "<script> 
							alert('Block Success') 
							window.location='manage_customer';
							</script>";
					}
				}
			}
			
			break;
		
			  
			  default:
			  include_once('404.php');
			  break;
		  }
	  }
  }
  
 $obj=new control;
?>