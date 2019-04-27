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
		case 'delete':
			$id=$_GET['id'];
			$cstudent->removeWritten($id);
			break;
	
		case 'insert':
			$cstudent->getInsertWritten();
			break;
	}
}
else
{
	$id=$_SESSION['user_id'];
	$cstudent->getWrittenbyIdnotaccept($id);
}	
?>	
