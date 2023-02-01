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

			case '/add_company':
			if(isset($_REQUEST['submit']))
			{
				$com_name=$_REQUEST['com_name'];
				
				$com_img=$_FILES['com_img']['name'];  // get only input type="file"
				$path='company_img/'.$com_img;
				$dup_file=$_FILES['com_img']['tmp_name'];// duplicate file get	
				move_uploaded_file($dup_file,$path);
	
				$com_logo=$_FILES['com_logo']['name'];  // get only input type="file"
				$path='company_logo/'.$com_logo;
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
				$path='model_img/'.$mod_img;
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

			case '/manage_company':
			$manage_company_arr=$this->selectall('company');	
			include_once('manage_company.php');
			break;	
	
			case '/manage_model':
			$manage_model_arr=$this->selectall('model');	
			include_once('manage_model.php');
			break;	

			case '/manage_service':
			$manage_service_arr=$this->selectall('service');
			include_once('manage_service.php');
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
							$path='company_img/'.$com_img;
							$dup_file=$_FILES['com_img']['tmp_name'];
							move_uploaded_file($dup_file,$path);
					
								if($_FILES['com_logo']['size']>0)
								 {
								$com_logo=$_FILES['com_logo']['name'];  
								$path='company_logo/'.$com_logo;
								$dup_file=$_FILES['com_logo']['tmp_name'];
								move_uploaded_file($dup_file,$path);
					
						
								$arr=array("com_id"=>$com_id,"com_name"=>$com_name,"com_img"=>$com_img,'com_logo'=>$com_logo);
								$res=$this->update('company',$arr,$where);
									if($res)
									{
										unlink('company_logo/'.$old_file);
										unlink('company_img/'.$old_file);
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
										unlink('company_img/'.$old_file);
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
							$path='model_img/'.$mod_img;
							$dup_file=$_FILES['mod_img']['tmp_name'];
							move_uploaded_file($dup_file,$path);
					
						
						$arr=array("mod_id"=>$mod_id,"com_id"=>$com_id,"mod_name"=>$mod_name,"mod_img"=>$mod_img);
						$res=$this->update('model',$arr,$where);
							if($res)
							{
								unlink('model_img/'.$old_file);
								echo "";
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
  			
  			case '/view_feedback':
			$manage_feedback_arr=$this->selectall('feedback');
  			include_once('view_feedback.php');	
  			break;
  			
  			case '/view_contact':
			$manage_contact_arr=$this->selectall('contact');
  			include_once('view_contact.php');	
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
				$confirm_password=$_REQUEST['confirm_password'];
				$confirm_password=md5($confirm_password);
				
				if($password == $confirm_password)
				{
				
				    $arr=array("sp_name"=>$sp_name,"sp_email"=>$sp_email,"sp_mob_num"=>$sp_mob_num,"sp_address"=>$sp_address,"sp_gender"=>$sp_gender,"password"=>$password);
					
					$res=$this->insert('serviceprovider',$arr);
					if($res)
					{
						echo "<script> alert('Add successfully....') </script>";
                        echo "<script>window.location= 'serviceprovider'</script>";						
					}
					else
					{
						echo "";
					}
				}
				else
				{
					echo "<script>alert('Password and conform password does not match..');</script>";
					echo "<script>window.location= 'serviceprovider'</script>";

				}
			}
			
  			include_once('serviceprovider.php');	
  			break;
			
			case '/view_customer':
			$manage_customer_arr=$this->selectall('customer');
  			include_once('view_customer.php');	
  			break;
			
			case '/view_payment':
			$manage_payment_arr=$this->selectall('payment');
  			include_once('view_payment.php');	
  			break;
			
						
			case '/profile':
			  $where=array("admin_email"=>$_SESSION['email']);
			  $run=$this->select_where('admin',$where);
			  $fetch=$run->fetch_object();
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
			
			case '/edit_provider':
			if(isset($_REQUEST['edit_sp_id']))
			{
				$sp_id=$_REQUEST['edit_sp_id'];
				$where=array("sp_id"=>$sp_id);
				$run=$this->select_where('serviceprovider',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$sp_id=$_REQUEST['sp_id'];
					$sp_name=$_REQUEST['sp_name'];
					$sp_email=$_REQUEST['sp_email'];
				    $sp_mob_num=$_REQUEST['sp_mob_num'];
					$sp_address=$_REQUEST['sp_address'];
										
					
					$arr=array("sp_id"=>$sp_id,"sp_name"=>$sp_name,"sp_email"=>$sp_email,"sp_mob_num"=>$sp_mob_num,"sp_address"=>$sp_address);
					$res=$this->update('serviceprovider',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_provider';
						</script>";
					}
				}
			}
			include_once('edit_provider.php');
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