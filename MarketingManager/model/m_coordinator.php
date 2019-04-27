<?php 
require_once('model/dbconnect.php');
class m_Coordinator extends DbConnect{
	
	public function insertCoordinator($name,$email,$pass)
	{
		$sql = "INSERT INTO coordinator(CoorName, CoorEmail,CoorPassword, Status) VALUES (?,?,?,'accept')";
		$this->setQuery($sql);
		$result = $this->execute(array($name,$email,md5($pass)));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}
	public function getAllCoordinator()
	{
		//create query
		$sql = "SELECT * FROM coordinator";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getAllRows();
	}	
	public function updateCoordinator($id)
	{
		$sql = "UPDATE coordinator SET Status='notaccept'  WHERE CoorID=?";
		$this->setQuery($sql);
		$result = $this->execute(array($id));
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	public function getOneCoordinator($id)
	{
		$sql = "SELECT * FROM coordinator WHERE CoorID=?"; 
		$this->setQuery($sql);
		$result = $this->getOneRow(array($id));
		return $result;
	}

	public function sendEmailToCoor($sender,$subject,$content,$receiver)
	{
		$sql = "INSERT INTO manageremail(Sender, Subject, Content, Receiver) VALUES (?,?,?,?)";
		$this->setQuery($sql);
		$result = $this->execute(array($sender,$subject,$content,$receiver));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}
	
}
 ?>