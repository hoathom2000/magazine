<?php 
include("controller/c_adrouter.php");
include("model/m_faculty.php");
class c_Faculty extends c_AdRouter{

	public function getInsertFaculty()
	{
		$this->loadView('v_insertfaculty');
	}
	public function postInsertFaculty($facultyname,$startdate,$enddate)
	{
		$m_faculty = new m_Faculty();
		$id = $m_faculty->insertFaculty($facultyname,$startdate,$enddate);
		if($id>0)
		{
			header('location:faculty.php');
		}
	}
	function getFaculty()
	{
		$m_faculty = new m_Faculty();
		$facultylist = $m_faculty->getAllFaculty();
		$data = array('FacultyList' => $facultylist);
		$this->loadView("v_faculty" , $data);
	}
	function getUpdateFaculty($id)
	{
		$m_faculty = new m_Faculty();
		$faculty = $m_faculty->getOneFaculty($id);
		$data = array('UpdateFaculty'=> $faculty);
		$this->loadView('v_updatefaculty' , $data);
	}

	function updateFaculty($facultyname,$startdate,$enddate,$id)
	{
		$m_faculty = new m_Faculty();
		$id_faculty = $m_faculty->updateFaculty($facultyname,$startdate,$enddate,$id);
		if($id_faculty>0)
		{
			header('location:faculty.php');
		}
	}
	function countAllWrittens()
	{
		$m_faculty = new m_Faculty();
		$writtenlist = $m_faculty->countAllWritten();
		$data = array('WrittenNumber' => $writtenlist);
		$this->loadView("v_countwritten" , $data);
	}
	function getAllFaculty()
	{
		$m_faculty = new m_Faculty();
		$facultylist = $m_faculty->getAllFaculty();
		return array('AllFaculty' => $facultylist);
	}
	function countEachFaculty($id)
	{
		$m_faculty = new m_Faculty();
		$writtenlist = $m_faculty->countEachFalcuty($id);
		return array('WrittenNumberEachFaculty' => $writtenlist);
	}
}
?>