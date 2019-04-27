<?php 
ob_start();
include('controller/c_email.php');
include('controller/c_register.php');
$c_email = new c_Email();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{
		
		
	}
}
else
{
	
	$id = $_SESSION['user_id'];
	$c_email->getEmail($id);
}
	
?>