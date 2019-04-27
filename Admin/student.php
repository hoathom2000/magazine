<?php 
ob_start();
include('controller/c_student.php');
$c_student = new c_Student();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{	
		case 'insert':
			$c_student->getInsertStudent();
			break;
		case 'delete':
		$id = $_GET['id'];
		$c_student->deleteStudent($id);
		break;	
			
	
	}
}
else
{
	$c_student->getStudent();
}
	
?>