<?php 
error_reporting(0);
session_start();
include_once('../model/m_user.php');
class c_Register
{
	public function postRegister($name, $email, $pass) 
	{
		$muser = new m_User();
		$id_user = $muser->register($name, $email, $pass);
		if($id_user>0)
			{
				$_SESSION['success'] = "register successfully";
				if(isset($_SESSION['error']))
					unset($_SESSION['error']);
				header("location:login.php");
			}
			else
			{
				$_SESSION['error'] = "registration fail";
				header("location:signup.php");
			}
	}
	public function postLogin($email,$pass)
	{
		$muser = new m_User();
		$user = $muser->login($email, $pass);
		if($user)
			{
				$_SESSION['user_id'] = $user->StudentID;
				$_SESSION['user_name'] = $user->StdName;
				$_SESSION['user_email'] = $user->StuEmail;		
				$_SESSION['user_password'] = $user->StuPass;
				$_SESSION['user_image'] = $user->StuImage;
				if(isset($_SESSION['user_error']))
					unset($_SESSION['user_error']);
				header("location:homepage.php");
			}
			else
			{	
				$m_admin = new m_User();
				$admin = $m_admin->login2($email, $pass);
				if($admin)
				{
					$_SESSION['admin_name'] = $admin->AdName;
					if(isset($_SESSION['user_error']))
						unset($_SESSION['user_error']);
					header("location:../../Admin/faculty.php");
				}
				else
				{
					$m_manager = new m_User();
					$manager = $m_manager->login3($email, $pass);
						if($manager)
						{
							$_SESSION['manage_id'] = $manager->MngID;
							$_SESSION['manage_name'] = $manager->MngName;
							$_SESSION['manage_image']= $manager->MngImage;
							$_SESSION['manage_email']= $manager->MngEmail;
							if(isset($_SESSION['user_error']))
								unset($_SESSION['user_error']);
							header("location:../../MarketingManager/coordinator.php");
						}
						else{
							$m_coordinator = new m_User();
							$coordinator = $m_coordinator->login4($email, $pass);
								if($coordinator->Status=="accept")
								{
									$_SESSION['coordinator_image'] = $coordinator->CoorImage;
									$_SESSION['coordinator_facultyid'] = $coordinator->FacultyID;
									$_SESSION['coordinator_faculty'] = $coordinator->FacultyName;
									$_SESSION['coordinator_name'] = $coordinator->CoorName;
									$_SESSION['coordinator_startdate'] = $coordinator->StartDate;
									$_SESSION['coordinator_enddate'] = $coordinator->Enddate;
									$_SESSION['coordinator_email'] = $coordinator->CoorEmail;
									$_SESSION['coordinator_id'] = $coordinator->CoorID;
									if(isset($_SESSION['user_error']))
										unset($_SESSION['user_error']);
									header("location:../../MarketingCoordinator/writtenposting.php");
								}
								else
								{
									$_SESSION['user_error'] = "login fail";
									header("location:login.php");
								}
	}}
}
}
	public function postLogout()
	{
		if(isset($_SESSION['user_name']))
		{
			session_destroy();
			header("location:homepage.php");
		}
		if(isset($_SESSION['admin_name']))
		{
			session_destroy();
			header("location:homepage.php");
		}
		if(isset($_SESSION['manage_name']))
		{
			session_destroy();
			header("location:homepage.php");
		}
		if(isset($_SESSION['coordinator_name']))
		{
			session_destroy();
			header("location:homepage.php");
		}
	}
}
?>