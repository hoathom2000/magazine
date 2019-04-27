<?php 
ob_start();
include('controller/c_faculty.php');
$c_faculty = new c_Faculty();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{	
		case 'insert':
			$c_faculty->getInsertFaculty();
			break;
		case 'update':
			$id=$_GET['id'];
			$c_faculty->getUpdateFaculty($id);
			break;
	}
}
else
{
	$c_faculty->getFaculty();
}
	
?>