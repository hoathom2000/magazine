<?php 
require_once('model/dbconnect.php');
class m_Faculty extends DbConnect{

	public function insertFaculty($facultyname,$startdate,$enddate)
	{
		$sql = "INSERT INTO faculty(FacultyName, StartDate, EndDate) VALUES (?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($facultyname,$startdate,$enddate));
		if($result)
			return $this->getLastInserted();
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

	public function getOneFaculty($id)
	{
		$sql = "SELECT * FROM faculty WHERE FacultyID=?";
		$this->setQuery($sql);
		return $this->getOneRow(array($id));
	}
	public function updateFaculty($facultyname,$startdate,$enddate,$id)
	{
		$sql = "UPDATE faculty SET FacultyName=? , StartDate=? , EndDate=? WHERE FacultyID=?";
		$this->setQuery($sql);
		$result = $this->execute(array($facultyname,$startdate,$enddate,$id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	public function countAllWritten()
	{
		//create query
		$sql = "SELECT COUNT(DISTINCT WrittenID) AS total FROM written
      			INNER JOIN student ON written.StudentID = student.StudentID
      			INNER JOIN faculty ON faculty.FacultyID = student.FacultyID
      			";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getOneRow();
	}
	public function countEachFalcuty($id)
	{
		//create query
		$sql = "SELECT COUNT(DISTINCT WrittenID) AS total FROM written
      			INNER JOIN student ON written.StudentID = student.StudentID
      			INNER JOIN faculty ON faculty.FacultyID = student.FacultyID
                WHERE faculty.FacultyID=?
      			";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getAllRows(array($id));
	}	
}
 ?>