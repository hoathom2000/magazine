<?php 
class DbConnect
{
	public $db=null;
	public $sql='';
	public $cursor=null;
	//constructor
	public function DbConnect(){
		//new instance PDO to connect to mysql
		//host: name of datanase server
		//dbname: name of database
		//usernaem: root
		//password:''
		$this->db = new PDO("mysql:host=localhost;dbname=megazine",'root','');
	}
	public function setQuery($sql)
	{
		$this->sql = $sql;
	}
	//function execute query
	public function execute($options=array())
	{
		//prepare to runt sql statement
		$this->cursor=$this->db->prepare($this->sql);
		//get the parameter if it exits
		if($options)
			for($i=0; $i<count($options);$i++)
				$this->cursor->bindParam($i+1,$options[$i]);
		//run the sql statement
		$this->cursor->execute();
		//return the cursor (result of query)
		return $this->cursor;
	}
	//function get all rows of query result
	public function getAllRows($options=array())
	{
		if(!$options)
		{
			if(!$result=$this->execute())
				return false;
		}
		else
		{
			if(!$result=$this->execute($options))
				return false;
		}
		return $result->fetchAll(PDO::FETCH_OBJ);
	}
	public function getOneRow($options=array())
	{
		if(!$options)
		{
			if(!$result=$this->execute())
				return false;
		}
		else
		{
			if(!$result=$this->execute($options))
				return false;
		}
		return $result->fetch(PDO::FETCH_OBJ);
	}
	//get the lastid of the record has just inserted in db
	public function getLastInserted(){
		return $this->db->lastInsertId();
	}
	//disconnect the db connection
	public function disconnect()
	{
		$this->_db=null;
	}
}
 ?>
