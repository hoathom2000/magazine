<?php 
include_once("model/m_email.php");
include_once("controller/c_adrouter.php");
class c_Email extends c_AdRouter{
	
     public function getEmail($id)
    {
        $memail = new m_Email();
        $emaillistbyId = $memail->getEmailbyID($id);
        $data = array('Email' => $emaillistbyId);
        $this->loadView("v_email", $data);
    }
   
	
}
 ?>