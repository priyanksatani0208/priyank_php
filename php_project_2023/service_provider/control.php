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

		case '/manage_company':
		$manage_company_arr=$this->selectall('company');	
		include_once('manage_company.php');
		break;	

		case '/manage_model':
		$manage_model_arr=$this->selectall('model');	
		include_once('manage_model.php');
		break;	

		case '/manage_payment':
		$manage_payment_arr=$this->selectall('payment');
		include_once('manage_payment.php');
		break;
		
		case '/manage_service':
		$manage_service_arr=$this->selectall('service');
		include_once('manage_service.php');
		break;
			
		case '/header.php':
		$manager_header_arr=$this->selectall('serviceprovider');
		include_once('header.php');
		break;   

		case '/add_company':
		if(isset($_REQUEST['submit']))
		{
			$com_name=$_REQUEST['com_name'];
			
			$com_img=$_FILES['com_img']['name'];  // get only input type="file"
			$path='../admin/company_img/'.$com_img;
			$dup_file=$_FILES['com_img']['tmp_name'];// duplicate file get	
			move_uploaded_file($dup_file,$path);

			$com_logo=$_FILES['com_logo']['name'];  // get only input type="file"
			$path='../admin/company_logo/'.$com_logo;
			$dup_file=$_FILES['com_logo']['tmp_name'];// duplicate file get	
			move_uploaded_file($dup_file,$path);

			$arr=array('com_name'=>$com_name,'com_img'=>$com_img,'com_logo'=>$com_logo);

			$res=$this->insert('company',$arr);

			if($res)
			{
				echo "<script> alert('Company Successfully Register ') </script>";
			}
			else
			{
				echo "<script> alert('Company not Successfully Register') </script>";
			}
		}	
		include_once('add_company.php');
		break;

		case '/add_model':
		$manage_servic_arr=$this->selectall('company');
		if(isset($_REQUEST['submit']))
		{
			$com_id=$_REQUEST['com_id'];
			$mod_name=$_REQUEST['mod_name'];
			
			$mod_img=$_FILES['mod_img']['name'];  // get only input type="file"
			$path='../admin/model_img/'.$mod_img;
			$dup_file=$_FILES['mod_img']['tmp_name'];// duplicate file get	
			move_uploaded_file($dup_file,$path);

			$arr=array('com_id'=>$com_id,'mod_name'=>$mod_name,'mod_img'=>$mod_img);

			$res=$this->insert('model',$arr);

			if($res)
			{
				echo "<script> alert('Register Success') </script>";
			}
			else
			{
				echo "<script> alert('Register not Success') </script>";
			}
		}
		include_once('add_model.php');
		break;	
		
		case '/add_service':
		$manage_servic_arr=$this->selectall('company');
		if(isset($_REQUEST['submit']))
		{
			$com_id=$_REQUEST['com_id'];
			$mod_id=$_REQUEST['mod_id'];
			$service_name=$_REQUEST['service_name'];
			$service_price=$_REQUEST['service_price'];
			$service_desc=$_REQUEST['service_desc'];

			$arr=array("com_id"=>$com_id,"mod_id"=>$mod_id,"service_name"=>$service_name,"service_price"=>$service_price,"service_desc"=>$service_desc);

			$res=$this->insert("service",$arr);
			if($res)
			{
				echo "<script> alert('Add successfully....') </script>";
							
			}
			else
			{
				echo "<script> alert('faill....') </script>";
			}
		}	
		include_once('add_service.php');
		break;
		
		case'/modeldata':
		if(isset($_REQUEST['btn']))
		{
			$com_id=$_REQUEST['btn'];
			$where=array("com_id"=>$com_id);
			$run=$this->select_where('model',$where);
			while($fetch=$run->fetch_object())
			{
				$arr[]=$fetch;
			}
			?>
			<option>---Select State---</option>
			<?php
			foreach($arr as $r)
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
			
	    case '/edit_company':
		if(isset($_REQUEST['edit_com_id']))
		{
			$com_id=$_REQUEST['edit_com_id'];
			$where=array("com_id"=>$com_id);
			$run=$this->select_where('company',$where);
			$fetch=$run->fetch_object();
			$old_file=$fetch->com_img;
			
			if(isset($_REQUEST['submit']))
			{
				$com_id=$_REQUEST['com_id'];		
				$com_name=$_REQUEST['com_name'];
							
				if($_FILES['com_img']['size']>0)
				{
					$com_img=$_FILES['com_img']['name'];  
					$path='../admin/company_img/'.$com_img;
					$dup_file=$_FILES['com_img']['tmp_name'];
					move_uploaded_file($dup_file,$path);
			
						if($_FILES['com_logo']['size']>0)
				     	{
							$com_logo=$_FILES['com_logo']['name'];  
							$path='../admin/company_logo/'.$com_logo;
							$dup_file=$_FILES['com_logo']['tmp_name'];
							move_uploaded_file($dup_file,$path);
			
				
						$arr=array("com_id"=>$com_id,"com_name"=>$com_name,"com_img"=>$com_img,'com_logo'=>$com_logo);
						$res=$this->update('company',$arr,$where);
							if($res)
							{
								unlink('../admin/company_logo/'.$old_file);
								unlink('../admin/company_img/'.$old_file);
								echo "<script> 
										alert('Update Success'); 
										window.location='manage_company';
										</script>";
				         	}
					    }
						else
						{
							$arr=array("com_id"=>$com_id,"com_name"=>$com_name,"com_img"=>$com_img);
					     	$res=$this->update('company',$arr,$where);
							if($res)
							{
								unlink('../admin/company_img/'.$old_file);
								echo "<script> 
										alert('Update Success'); 
										window.location='manage_company';
										</script>";
				         	}
						}		
			    }
				else
				{
					$arr=array("com_id"=>$com_id,"com_name"=>$com_name);
					$res=$this->update('company',$arr,$where);
					if($res)
					{
						
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_company';
						</script>";
					}
				}
			
			}
		}	
		include_once('edit_company.php');
		break;		

		case '/edit_model':
			if(isset($_REQUEST['edit_mod_id']))
			{
				$mod_id=$_REQUEST['edit_mod_id'];
				$where=array("mod_id"=>$mod_id);
				$run=$this->select_where('model',$where);
				$fetch=$run->fetch_object();
				$old_file=$fetch->mod_img;
				
				if(isset($_REQUEST['submit']))
				{
					$mod_id=$_REQUEST['mod_id'];
					$com_id=$_REQUEST['com_id'];		
					$mod_name=$_REQUEST['mod_name'];
								
					if($_FILES['mod_img']['size']>0)
					{
						$mod_img=$_FILES['mod_img']['name'];  
						$path='../admin/model_img/'.$mod_img;
						$dup_file=$_FILES['mod_img']['tmp_name'];
						move_uploaded_file($dup_file,$path);
				
					
					$arr=array("mod_id"=>$mod_id,"com_id"=>$com_id,"mod_name"=>$mod_name,"mod_img"=>$mod_img);
					$res=$this->update('model',$arr,$where);
						if($res)
						{
							unlink('../admin/model_img/'.$old_file);
							echo "<script> 
									alert('Update Success'); 
									window.location='manage_model';
									</script>";
						}
					}
					else
					{
						$arr=array("mod_id"=>$mod_id,"com_id"=>$com_id,"mod_name"=>$mod_name);
						$res=$this->update('model',$arr,$where);
						if($res)
						{
							
							echo "<script> 
							alert('Update Success'); 
							window.location='manage_model';
							</script>";
						}
					}
				
				}
			}		
		include_once('edit_model.php');
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

		case '/edit_service':
		if(isset($_REQUEST['edit_service_id']))
		{
			$service_id=$_REQUEST['edit_service_id'];
			$where=array("service_id"=>$service_id);
			$run=$this->select_where('service',$where);
			$fetch=$run->fetch_object();
			
			if(isset($_REQUEST['submit']))
			{
				$service_id=$_REQUEST['service_id'];
				$service_name=$_REQUEST['service_name'];
				$service_price=$_REQUEST['service_price'];
				$service_desc=$_REQUEST['service_desc'];
				$com_id=$_REQUEST['com_id'];	
				$mod_id=$_REQUEST['mod_id'];								
				
				$arr=array("service_id"=>$service_id,"service_name"=>$service_name,"service_price"=>$service_price,"service_desc"=>$service_desc,"com_id"=>$com_id,"mod_id"=>$mod_id);
				$res=$this->update('service',$arr,$where);
				if($res)
				{
					echo "<script> 
					alert('Update Success'); 
					window.location='manage_service';
					</script>";
				}
			}
		}
		include('edit_service.php');
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

	    case '/delete':		
		if(isset($_REQUEST['del_com_id']))
		{
			$com_id=$_REQUEST['del_com_id'];
			$where=array("com_id"=>$com_id);
			$res=$this->delete_where('company',$where);
			if($res) // 1 means true
			{
				echo "<script> 
					alert('Delete Success') 
					window.location='manage_company';
					</script>";
			}
		}

		if(isset($_REQUEST['del_mod_id']))
		{
			$mod_id=$_REQUEST['del_mod_id'];
			$where=array("mod_id"=>$mod_id);
			$res=$this->delete_where('model',$where);
			if($res) // 1 means true
			{
				echo "<script> 
					alert('Delete Success') 
					window.location='manage_model';
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
	
		  
		  default:
		  include_once('404.php');
		  break;
		  }
	  }
  }
  
 $obj=new control;
?>