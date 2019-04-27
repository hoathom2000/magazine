<?php 
include_once('dbconnect.php');
class m_Written extends DbConnect
{
	function getAllWrittensAccept(){
		//create query
		$sql = "SELECT * FROM written where Status='accept' ORDER BY written.WrittenID DESC;";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getAllRows();
	}
	public function insertWritten($name,$image,$profile,$date,$content,$studentid)
	{
		$sql = "INSERT INTO written(Name, Image, Profile, DateTimeWritten, Content, StudentID, Status) VALUES (?,?,?,?,?,?,'notaccept')";
		$this->setQuery($sql);
		$result = $this->execute(array($name,$image,$profile,$date,$content,$studentid));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}

	public function delWritten($id)
	{
		$sql = "DELETE FROM written WHERE WrittenId=?";
		$this->setQuery($sql);
		$result = $this->execute(array($id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	function getWrittensbyIDaccept($id){
		//create query
		$sql = "SELECT * FROM written 
      INNER JOIN student ON written.StudentID = student.StudentID
      INNER JOIN faculty ON faculty.FacultyID = student.FacultyID
		where written.StudentID=? and Status='accept'
		ORDER BY written.WrittenID DESC;";
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	function getWrittensbyIDnotaccept($id){
		//create query
		$sql = "SELECT * FROM written 
      INNER JOIN student ON written.StudentID = student.StudentID
      INNER JOIN faculty ON faculty.FacultyID = student.FacultyID
		where written.StudentID=? and Status='notaccept'
		ORDER BY written.WrittenID DESC;";
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	
	public function getOneWritten($id)
	{
		$sql = "SELECT * FROM written 
		INNER JOIN student ON written.StudentID = student.StudentID 
		INNER JOIN faculty ON student.FacultyId = faculty.FacultyId 
		WHERE written.WrittenID =? "; 
		$this->setQuery($sql);
		return $this->getOneRow(array($id));
	}

	public function insertComment( $comment,$writtenid, $studentid)
	{
		$sql = "INSERT INTO comment(Comment ,WrittenID, StudentID) VALUES (?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($comment,$writtenid, $studentid));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}
	public function getComment($id)
	{
		$sql = "SELECT * FROM comment 
		INNER JOIN student ON comment.StudentID = student.StudentID 
		INNER JOIN  written ON comment.WrittenID = written.WrittenID 
		WHERE written.WrittenID =?" ; 
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	function viewStudent($id)
	{
		$sql = "SELECT * From student WHERE StudentID=?";
		$this->setQuery($sql);
		return $this->getOneRow(array($id));
	}

	function updateStudent($pass, $id)
	{
		$sql = "UPDATE student SET StuPass = ? WHERE StudentID=?";
		$this->setQuery($sql);
		$result = $this->execute(array(md5($pass), $id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	function updateStudentImage($image, $id)
	{
		$sql = "UPDATE student SET StuImage = ? WHERE StudentID=?";
		$this->setQuery($sql);
		$result = $this->execute(array($image, $id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}

}	
	
 ?>
