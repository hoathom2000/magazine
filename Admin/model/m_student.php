<?php 
require_once('model/dbconnect.php');
class m_Student extends DbConnect{

	public function insertStudent($name,$email,$pass,$faculty)
	{
		$sql = "INSERT INTO student(StdName, StuEmail, StuPass, StuImage, FacultyID) 
				VALUES (?,?,?,'user123.jpg',?)";
		$this->setQuery($sql);
		$result = $this->execute(array($name,$email,md5($pass),$faculty));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}
	public function getAllStudent()
	{
		//create query
		$sql = "SELECT * FROM student
		 INNER JOIN faculty ON faculty.FacultyID = student.FacultyID";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getAllRows();
	}	
	function deleteStudent($id)
	{
		$sql = "DELETE FROM student WHERE StudentID=?";
		$this->setQuery($sql);
		$result = $this->execute(array($id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	public function getAllFaculty()
	{
		//create query
		$sql = "SELECT * FROM faculty";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getAllRows();
	}

}
 ?>