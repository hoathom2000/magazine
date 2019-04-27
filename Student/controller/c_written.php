<?php 
include('c_adrouter.php');
include('model/m_written.php');
class c_Written extends c_AdRouter{

	public function removeWritten($id)
	{
		$mwritten = new m_Written();
		$mwritten->delWritten($id);
		header('location:studentman2.php');
	}
	public function getInsertWritten()
	{
		$this->loadView('v_viewwritten');
	}

	public function postInsertWritten($name,$image,$profile,$date,$content,$studentid)
	{
		$mwritten = new m_Written();
		$id = $mwritten->insertWritten($name,$image,$profile,$date,$content,$studentid);
		if($id>0)
		{
			header('location:studentman.php');
		}
	}

    public function getWrittenAccept()
    {
        $mwritten = new m_Written();
        $writtenlistAccept = $mwritten->getAllWrittensAccept();
        $data = array('WrittenList3' => $writtenlistAccept);
        $this->loadView("v_studentman", $data);
    }
    public function getWrittenbyId($id)
    {
        $mwritten = new m_Written();
        $writtenlistbyId = $mwritten->getWrittensbyIDaccept($id);
        $data = array('WrittenList5' => $writtenlistbyId);
        $this->loadView("v_studentman", $data);
    }
    public function getWrittenbyIdnotaccept($id)
    {
        $mwritten = new m_Written();
        $writtenlistbyId = $mwritten->getWrittensbyIDnotaccept($id);
        $data = array('WrittenList6' => $writtenlistbyId);
        $this->loadView("v_studentman2", $data);
    }

    public function getDetailWritten($id)
    {
        $m_written = new m_Written();
        $written =$m_written->getOneWritten($id);
        $data = array('Written'=>$written);

        $this->loadView("v_viewdetailwritten" , $data);
    }

    public function postInsertComment($comment, $writtenid, $studentid)
    {
        $mwritten = new m_Written();
        $id = $mwritten->insertComment($comment, $writtenid, $studentid);
        if($id>0)
        {
            header('location:detailwritten.php?id='.$writtenid);

        }
    }
    public function getAllComment($id)
    {
        $m_written = new m_Written();
        $written =$m_written->getComment($id);
        return array('Comment' => $written);
    }
    function viewInformation($id)
    {
        $muser = new m_Written();
        $student =$muser->viewStudent($id);
        $data = array('Student'=>$student);

        $this->loadView("information" , $data);
    }
    function viewPassword($id)
    {
        $muser = new m_Written();
        $student =$muser->viewStudent($id);
        $data = array('password'=>$student);

        $this->loadView("newinformation" , $data);
    }
    function updateMember($pass , $id)
    {
        $mstudent = new m_Written();
        $id_student = $mstudent->updateStudent($pass, $id);
        if($id_student>0)
        {
            header('location:studentinformation.php');
        }
    }
    function viewImage($id)
    {
        $muser = new m_Written();
        $student =$muser->viewStudent($id);
        $data = array('Image'=>$student);

        $this->loadView("v_newImage" , $data);
    }
    function updateMemberImage($image, $id)
    {
        $mstudent = new m_Written();
        $id_student = $mstudent->updateStudentImage($image, $id);
        if($id_student>0)
        {
            header('location:studentinformation.php');
        }
    }
}
 ?>