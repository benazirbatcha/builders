<?php 

/**
 * message model 
 */
class MessageModel
{
	public $messageData = array(array('messageData' =>"messageData"),);
	public $DBModel;

	public function getDBMembers()
	{
		$this->DBModel = new DBModel();
	}

	public function msgInsert($repMSG, $postID, $userID)
	{
		$sql="INSERT INTO message (message, post_id, user_id) VALUES ('$repMSG', '$postID', '$userID')";
		$con=$this->DBModel->con;
		if ($con->query($sql)) {
			echo "<script>alert('Comented Successfuly');</script>";
			echo "<script>location.href='dash.php';</script>";
		}else{
			echo "<script>alert('".$repMSG."".$postID."".$userID."');</script>";
		}
	}

	public function getAllMessages()
	{
		$con=$this->DBModel->con;
		$sql="SELECT * from message";
		if ($result = $con->query($sql)) {
			if ($result->num_rows >0) {
				while ($row = $result->fetch_array()) {
					$temp = array();
					foreach ($row as $key => $value) {
						$temp=$this->DBModel->array_push_assoc($temp, $key,$value);
					}
					array_push($this->messageData, $temp);
				}
			}
		}
	}
	
	function __construct()
	{
		$this->getDBMembers();
		$this->getAllMessages();
	}
}

 ?>