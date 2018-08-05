<?php 

include('DBModel.php') ;

/**
 * User Model
 */
class UserModel
{
	public $userData = array(array('userData' =>"userData"),);
	public $DBModel;

	public function getDBMembers()
	{
		$this->DBModel = new DBModel();
	}

	public function getAllUser()
	{
		$con=$this->DBModel->con;
		$sql="SELECT * from users";
		if ($result = $con->query($sql)) {
			if ($result->num_rows >0) {
				while ($row = $result->fetch_array()) {
					$temp = array();
					foreach ($row as $key => $value) {
						$temp=$this->DBModel->array_push_assoc($temp, $key,$value);
					}
					array_push($this->userData, $temp);
				}
			}
		}
	}

	
	function __construct()
	{
		$this->getDBMembers();
		$this->getAllUser();
	}
}

?>
