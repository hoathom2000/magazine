<?php 
ob_start();
include('controller/c_written.php'); 	 	
include('controller/c_register.php');
$cstudent = new c_Written();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{
		case 'update':
			$studentid = $_SESSION['user_id'];
			$cstudent->viewPassword($studentid);
			break;
		case 'updateImage':
			$studentid = $_SESSION['user_id'];
			$cstudent->viewImage($studentid);
			break;
	}
}
else
{
	$studentid = $_SESSION['user_id'];
	$cstudent->viewInformation($studentid);
}
?>	
