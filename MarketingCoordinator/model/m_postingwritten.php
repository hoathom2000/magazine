<?php 
require_once('model/dbconnect.php');
class m_Posting extends DbConnect{
	
	public function getOneWritten($id)
	{
		$sql = "SELECT * FROM written
		 INNER JOIN student ON written.StudentID = student.StudentID 
		 INNER JOIN faculty ON student.FacultyId = faculty.FacultyId 
		WHERE written.WrittenID =?"; 
		$this->setQuery($sql);
		$result = $this->getOneRow(array($id));
		return $result;
	}

	public function updateWritten($id)
	{
		$sql = "UPDATE written SET status='accept'  WHERE WrittenID=?";
		$this->setQuery($sql);
		$result = $this->execute(array($id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	public function updateWritten2($id)
	{
		$sql = "UPDATE written SET status='notaccept'  WHERE WrittenID=?";
		$this->setQuery($sql);
		$result = $this->execute(array($id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	
	function getPostingWrittensbyIDaccept($id){
		//create query
		$sql = "SELECT * FROM written 
      INNER JOIN student ON written.StudentID = student.StudentID
      INNER JOIN faculty ON faculty.FacultyID = student.FacultyID
		where faculty.FacultyID=? and Status='accept'
		ORDER BY written.WrittenID DESC;";
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	function getWaitingWrittensbyIDaccept($id){
		//create query
		$sql = "SELECT * FROM written 
      INNER JOIN student ON written.StudentID = student.StudentID
      INNER JOIN faculty ON faculty.FacultyID = student.FacultyID
		where faculty.FacultyID=? and Status='notaccept'
		ORDER BY written.WrittenID DESC;";
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	public function sendEmailFromCoor($sender,$subject,$content,$receiver)
	{
		$sql = "INSERT INTO email(Sender, Subject, Content, Receiver) VALUES (?,?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($sender,$subject,$content,$receiver));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}
}
 ?>