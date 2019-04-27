<?php 
ob_start();
include('controller/c_postingwritten.php');
include('../Student/controller/c_register.php');
$c_PostingWritten = new c_PostingWritten();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{
		case 'update':
			$id=$_GET['id'];
			$c_PostingWritten->getUpdateWritten2($id);
			break;
	}
}
else
{
	$id = $_SESSION['coordinator_facultyid'];
	$c_PostingWritten->getWaitingWrittenbyId($id);
}
	
?>