<?php 
include_once("model/m_postingwritten.php");
include_once("controller/c_adrouter.php");
class c_PostingWritten extends c_AdRouter{
	
	public function getUpdateWritten($id)
	{
		$m_written = new m_Posting();
		$written =$m_written->getOneWritten($id);
		$data = array('Written'=>$written);
		$this->loadView("v_updatepostingwritten" , $data);
	}
	public function getUpdateWritten2($id)
	{
		$m_written = new m_Posting();
		$written =$m_written->getOneWritten($id);
		$data = array('Written'=>$written);
		$this->loadView("v_updatewaitingwritten" , $data);
	}
	public function postUpdateWritten($id)
	{
		$m_written = new m_Posting();
		$result = $m_written->updateWritten($id);
		if($result>0)
		{
			header('location:writtenposting.php');
		}
	}
	public function postUpdateWritten2($id)
	{
		$m_written = new m_Posting();
		$result = $m_written->updateWritten2($id);
		if($result>0)
		{
			header('location:writtenwaiting.php');
		}
	}

	public function back()
	{
		
			header('location:writtenposting.php');
		
	}
	 public function getPostingWrittenbyId($id)
    {
        $mwritten = new m_Posting();
        $writtenlistbyId = $mwritten->getPostingWrittensbyIDaccept($id);
        $data = array('PostingWrittenList' => $writtenlistbyId);
        $this->loadView("v_postingwritten", $data);
    }
     public function getWaitingWrittenbyId($id)
    {
        $mwritten = new m_Posting();
        $writtenlistbyId = $mwritten->getWaitingWrittensbyIDaccept($id);
        $data = array('WaitingWrittenList' => $writtenlistbyId);
        $this->loadView("v_waitingwritten", $data);
    }
    public function sendEmail($sender,$subject,$content,$receiver)
	{
		$mmemail = new m_Posting();
		$email = $mmemail->sendEmailFromCoor($sender,$subject,$content,$receiver);
		if($email>0)
		{
			header('location:writtenposting.php');
		}
	}
	
}
 ?>