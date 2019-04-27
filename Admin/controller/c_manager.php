<?php 
include("controller/c_adrouter.php");
include("model/m_manager.php");
class c_Manager extends c_AdRouter{

	function getManager()
	{
		$m_manager = new m_Manager();
		$managerlist = $m_manager->getAllManager();
		$data = array('ManagerList' => $managerlist);
		$this->loadView("v_manager" , $data);
	}

	function getInsert()
	{
			$this->loadView('v_insertManager');
	}

	function insertManager($name,$email,$pass)
	{
		$m_manager = new m_Manager();
		$id_manager = $m_manager->addManager($name,$email,$pass);
		if($id_manager>0)
		{
			header('location:manager.php');
		}
	}

}
?>