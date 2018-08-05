<?php 
/**
 * DB Connection
 */
class DBModel
{
	public $con;

	public function getCon()
	{
		$this->con=new mysqli("localhost", "root", "", "test");
		return $this->con;
	}

	public function array_push_assoc($array, $key, $value)
	{
		$array[$key]=$value;
		return $array;
	}
	
	function __construct()
	{
		$this->con=$this->getCon();
	}
}

?>