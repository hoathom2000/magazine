<?php 
ob_start();
include('controller/c_coordinator.php');
include('../Student/controller/c_register.php');
$c_coordinator = new c_Coordinator();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{	
		case 'insert':
			$c_coordinator->getInsertCoordinator();
			break;
		case 'update':
			$id=$_GET['id'];
			$c_coordinator->getUpdateCoordinator($id);
			break;
			
	
	}
}
else
{
	$id = $_SESSION['manage_id'];
	$c_coordinator->getCoordinator();
}
	
?>