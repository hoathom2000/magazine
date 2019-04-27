<?php 
include('../model/m_written.php');
class c_Home
{
	public function writtenByAccept()
	{
		$mwritten = new m_Written();
		$m_written = $mwritten->getAllWrittensAccept();
		return array('WrittenList4' => $m_written);
	}
}

 ?>