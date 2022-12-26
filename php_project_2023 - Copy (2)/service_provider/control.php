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
					$data=$run->fetch_object();
				    $status=$data->status;
					if($status=="Unblock")
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
							alert('Login Failed due Blocked') 
							window.location='index';
							</script>";
					}
						
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
				$company_arr=$this->select(company);
				include_once('add_service.php');
    		}
		    include_once('add_service.php');
		    break;
			
			case '/add_service':
			if(isset($_REQUEST['btn']))
				{
					$com_id=$_REQUEST['btn'];
					$where=array("com_id"=>$com_cid);
					$state_arr=$this->select_where('model',$where);
					?>
					<option>------------Select State----</option>
					<?php
					foreach($model_arr as $r)
					{
					?>
						<option value="<?php echo $r->mod_id; ?>"><?php echo $r->mod_name; ?></option>
					<?php 
					}
				}
			
			break;

		  case '/profile':
		  $where=array("sp_email"=>$_SESSION['email']);
		  $run=$this->select_where('serviceprovider',$where);
		  $fetch=$run->fetch_object();
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
			
			case '/edit_customer':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$cust_id=$_REQUEST['cust_id'];
					$cust_name=$_REQUEST['cust_name'];
					$cust_email=$_REQUEST['cust_email'];
				    $cust_mob_num=$_REQUEST['cust_mob_num'];
					$address=$_REQUEST['address'];
										
					
					$arr=array("cust_id"=>$cust_id,"cust_name"=>$cust_name,"cust_email"=>$cust_email,"cust_mob_num"=>$cust_mob_num,"address"=>$address);
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_customer';
						</script>";
					}
				}
			}
			include_once('edit_customer.php');
			break;
			
			case '/edit_contact':
			if(isset($_REQUEST['edit_contact_id']))
			{
				$contact_id=$_REQUEST['edit_contact_id'];
				$where=array("contact_id"=>$contact_id);
				$run=$this->select_where('contact',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$contact_id=$_REQUEST['contact_id'];
					$contact_name=$_REQUEST['contact_name'];
					$contact_email=$_REQUEST['contact_email'];
				    $contact_message=$_REQUEST['contact_message'];									
					
					$arr=array("contact_id"=>$contact_id,"contact_name"=>$contact_name,"contact_email"=>$contact_email,"contact_message"=>$contact_message);
					$res=$this->update('contact',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_contact';
						</script>";
					}
				}
			}
			include_once('edit_contact.php');
			break;
			
			case '/edit_feedback':
			if(isset($_REQUEST['edit_feedback_id']))
			{
				$feedback_id=$_REQUEST['edit_feedback_id'];
				$where=array("feedback_id"=>$feedback_id);
				$run=$this->select_where('feedback',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$feedback_id=$_REQUEST['feedback_id'];
					$cust_name=$_REQUEST['cust_name'];
					$cust_mob_num=$_REQUEST['cust_mob_num'];
					$cust_email=$_REQUEST['cust_email'];
				    $feedback_message=$_REQUEST['feedback_message'];									
					
					$arr=array("feedback_id"=>$feedback_id,"cust_name"=>$cust_name,"cust_mob_num"=>$cust_mob_num,"cust_email"=>$cust_email,"feedback_message"=>$feedback_message);
					$res=$this->update('feedback',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_feedback';
						</script>";
					}
				}
			}
			include_once('edit_feedback.php');
			break;
			
			case '/edit_payment':
			if(isset($_REQUEST['edit_payment_id']))
			{
				$payment_id=$_REQUEST['edit_payment_id'];
				$where=array("payment_id"=>$payment_id);
				$run=$this->select_where('payment',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$payment_id=$_REQUEST['payment_id'];
					$payment_type=$_REQUEST['payment_type'];
					$cust_id=$_REQUEST['cust_id'];
					$service_id=$_REQUEST['service_id'];
				    $booking_id=$_REQUEST['booking_id'];									
					
					$arr=array("payment_id"=>$payment_id,"payment_type"=>$payment_type,"cust_id"=>$cust_id,"service_id"=>$service_id,"booking_id"=>$booking_id);
					$res=$this->update('payment',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_payment';
						</script>";
					}
				}
			}
			include_once('edit_payment.php');
			break;
	
		  
		  default:
		  include_once('404.php');
		  break;
		  }
	  }
  }
  
 $obj=new control;
?>