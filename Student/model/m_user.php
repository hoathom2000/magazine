<?php 
error_reporting(0);
include_once('dbconnect.php');
class m_User extends DbConnect
{
	function login($email, $md5pass)
	{
		$sql = "SELECT * From student WHERE StuEmail=? and StuPass=?";
		$this->setQuery($sql);
		return $this->getOneRow(array($email,$md5pass));
	}
	function login2($email, $md5pass)
	{
		$sql = "SELECT * From admin WHERE AdEmail=? and AdPass=?";
		$this->setQuery($sql);
		return $this->getOneRow(array($email,$md5pass));

	}
	function login3($email, $md5pass)
	{
		$sql = "SELECT * From manager WHERE MngEmail=? and MngPass=?";
		$this->setQuery($sql);
		return $this->getOneRow(array($email,$md5pass));

	}
	function login4($email, $md5pass)
	{
		$sql = "SELECT * From coordinator 
				INNER JOIN faculty ON coordinator.FacultyID = faculty.FacultyID
				WHERE coordinator.CoorEmail=? and coordinator.CoorPassword=?";
		$this->setQuery($sql);
		return $this->getOneRow(array($email,$md5pass));
	}

}
 ?>