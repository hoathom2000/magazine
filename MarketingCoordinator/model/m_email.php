<?php 
require_once('model/dbconnect.php');
class m_Email extends DbConnect{
	
	function getEmailbyID($id){
		//create query
		$sql = "SELECT * FROM manageremail where Receiver = ? 
		ORDER BY manageremail.MailID DESC;"; 
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	
}
 ?>