<?php
include_once('model.php');

class control extends model
{
	
	function __construct()
	{
		session_start();
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
				$address=$_REQUEST['address'];
				$password=$_REQUEST['password'];
                $password=md5($password);				
				
				$arr=array("cust_name"=>$cust_name,"cust_email"=>$cust_email,"cust_mob_num"=>$cust_mob_num,"address"=>$address,"password"=>$password);
				
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
						$data=$run->fetch_object();
				     	$status=$data->status;
						if($status=="Unblock")
						{
							$_SESSION['email']=$cust_email;
							echo "<script> 
								alert('Login Success') 
								window.location='home';
								</script>";
						}
						else
				    	{
						echo "<script> 
							alert('Login Failed due Blocked') 
							window.location='login';
							</script>";
					    }
						
					}
					else
					{
						echo "Login Failed due wrong credebntial";
					}
				}
            include_once('login.php');
            break;			
		
		   case '/logout':
			unset($_SESSION['email']);
			echo "<script> 
				alert('Logout Success')
				window.location='home';
				</script>";			
			break;
			
			case '/myprofile':
			$where=array("cust_email"=>$_SESSION['email']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('myprofile.php');
			break;
			
			case '/editmyprofile';
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$old_file=$fetch->file;
				
				if(isset($_REQUEST['submit']))
				{
					
					$cust_name=$_REQUEST['cust_name'];
					$cust_email=$_REQUEST['cust_email'];
					$cust_mob_num=$_REQUEST['cust_mob_num'];
					$address=$_REQUEST['address'];
					
					if($_FILES['file']['size']>0)
					{
						$file=$_FILES['file']['name'];  // get only input type="file"
						$path='images'.$file;
						$dup_file=$_FILES['file']['tmp_name'];// duplicate file get	
						move_uploaded_file($dup_file,$path);
						
						$arr=array("cust_name"=>$cust_name,"cust_email"=>$cust_email,"cust_mob_num"=>$cust_mob_num,"address"=>$address,"file"=>$file);
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							unlink('images/'.$old_file);
							echo "<script> 
							alert('Update Success'); 
							window.location='myprofile';
							</script>";
						}
					}
					else
					{
						$arr=array("cust_name"=>$cust_name,"cust_email"=>$cust_email,"cust_mob_num"=>$cust_mob_num,"address"=>$address);
						$res=$this->update('customer',$arr,$where);
						if($res)
						{
							echo "<script> 
							alert('Update Success'); 
							window.location='myprofile';
							</script>";
						}
					}
				}
				
			}
			include_once('editmyprofile.php');
			break;
			
			default:
				include_once('error.php');
		}
	}	
}
$obj=new control;
?>