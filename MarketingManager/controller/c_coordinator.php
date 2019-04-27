<?php 
include("controller/c_adrouter.php");
include("model/m_coordinator.php");
class c_Coordinator extends c_AdRouter{
	
	public function getInsertCoordinator()
	{
		$this->loadView('v_insertcoordinator');
	}
	public function postInsertCoordinator($name,$email,$md5pass) 
	{
		$m_coordinator= new m_Coordinator();
		$id = $m_coordinator->insertCoordinator($name,$email,$md5pass);
		if($id>0)
		{
			header('location:coordinator.php');
		}
	}
	function getCoordinator()
	{
		$m_coordinator = new m_Coordinator();
		$coordinatorlist = $m_coordinator->getAllCoordinator();
		$data = array('CoordinatorList' => $coordinatorlist);
		$this->loadView("v_coordinator" , $data);
	}
	public function getUpdateCoordinator($id)
	{
		$m_coordinator = new m_Coordinator();
		$coordinator =$m_coordinator->getOneCoordinator($id);
		$data = array('Coordinator'=>$coordinator);
		$this->loadView("v_updatecoordinator" , $data);
	}

	public function postUpdateCoordinator($id)
	{
		$m_coordinator = new m_Coordinator();
		$result = $m_coordinator->updateCoordinator($id);
		if($result>0)
		{
			header('location:coordinator.php');
		}
	}
	public function back()
	{
		
			header('location:coordinator.php');
		
	}

	public function sendMail($sender,$subject,$content,$receiver)
	{
		$mmemail = new m_Coordinator();
		$email = $mmemail->sendEmailToCoor($sender,$subject,$content,$receiver);
		if($email>0)
		{
			header('location:coordinator.php');
		}
	}

}
 ?>