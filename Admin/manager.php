<?php 
ob_start();
include('controller/c_manager.php');
$c_manager = new c_Manager();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{	
		
			case 'insert':
			$c_manager->getInsert();
			break;
	
	}
}
else
{
	$c_manager->getManager();
}
	
?>