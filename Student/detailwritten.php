<?php 
ob_start();
include('controller/c_written.php');
include('controller/c_register.php');
$cstudent = new c_Written();

	if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$cstudent->getDetailWritten($id);
}
?>	
