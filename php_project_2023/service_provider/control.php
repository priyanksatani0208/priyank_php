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
				  
				  $where=array('sp_email'=>$sp_email,'password'=>$password);
				  $run=$this->select_where('serviceprovider',$where);
				  $res=$run->num_rows;
				  if($res==1)
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
			  
			  case '/sp_logout':
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
			  
			  case '/delete':
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
			
			
			  
			  default:
			  include_once('404.php');
			  break;
		  }
	  }
  }
  
 $obj=new control;
?>