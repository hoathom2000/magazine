<?php 
include("controller/c_adrouter.php");
include("model/m_student.php");
class c_Student extends c_AdRouter{

	public function getInsertStudent()
	{
		$this->loadView('v_insertstudent');
	}
	public function postInsertStudent($name,$email,$md5pass,$faculty)
	{
		$m_student = new m_Student();
		$id = $m_student->insertStudent($name,$email,$md5pass,$faculty);
		if($id>0)
		{
			header('location:student.php');
		}
	}
	function getStudent()
	{
		$m_student = new m_Student();
		$studentlist = $m_student->getAllStudent();
		$data = array('StudentList' => $studentlist);
		$this->loadView("v_student" , $data);
	}
	public function deleteStudent($id)
	{
		$m_student = new m_Student();
		$m_student->deleteStudent($id);
		header('location:student.php');
	}
	function getFaculty()
	{
		$m_student = new m_Student();
		$FacultyList = $m_student->getAllFaculty();
		return array('FacultyList' => $FacultyList);

	}
}
?>