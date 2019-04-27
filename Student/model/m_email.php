<?php 
require_once('model/dbconnect.php');
class m_Email extends DbConnect{
	
	function getEmailbyID($id){
		//create query
		$sql = "SELECT * FROM email where Receiver = ? 
		ORDER BY email.EmailID DESC;";
		$this->setQuery($sql);
		return $this->getAllRows(array($id));
	}
	
}
 ?>