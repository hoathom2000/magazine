<?php 
ob_start();
include('controller/c_faculty.php');
$c_faculty = new c_Faculty();
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	
	switch($action)
	{	
		
	}
}
else
{
	$c_faculty->countAllWrittens();
}
	
?>