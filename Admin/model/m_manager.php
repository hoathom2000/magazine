<?php 
require_once('model/dbconnect.php');
class m_Manager extends DbConnect{

	public function getAllManager()
	{
		//create query
		$sql = "SELECT * FROM manager";
		//set query to pdo
		$this->setQuery($sql);
		//run the query
		return $this->getAllRows();
	}	

	public function addManager($name,$email,$pass)
	{
		$sql = "INSERT INTO manager(MngName, MngEmail, MngPass, MngImage) VALUES (?,?,?,'user123.jpg')";
		$this->setQuery($sql);
		$result = $this->execute(array($name,$email,md5($pass)));
		if($result)
			return $this->getLastInserted();
		else
			return false;
	}
}
 ?>