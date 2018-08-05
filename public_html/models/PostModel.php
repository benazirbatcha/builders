<?php 
/**
 * Post Model
 */
class PostModel
{
	public $postData = array(array('postData' =>"postData"),);
	public $DBModel;

	public function getDBMembers()
	{
		$this->DBModel = new DBModel();
	}

	public function postInsert($postMSG, $postIMG)
	{
		$tot=sizeof($this->postData);
		$id=$tot;
		$postID="PID".$id;
		$user_id=$_SESSION['user_id'];
		$sql="INSERT INTO post (post_id, post_msg, post_ph, user_id) VALUES ('$postID', '$postMSG', '$postIMG', '$user_id')";
		$con=$this->DBModel->con;
		if ($con->query($sql)) {
			echo "<script>alert('Posted Successfuly');</script>";
			echo "<script>location.href='dash.php';</script>";
		}else{
			echo "<script>alert('".$postIMG."".$postMSG."".$postID."".$user_id."');</script>";
		}
	}

	public function getAllPost()
	{
		$con=$this->DBModel->con;
		$sql="SELECT * from post";
		if ($result = $con->query($sql)) {
			if ($result->num_rows >0) {
				while ($row = $result->fetch_array()) {
					$temp = array();
					foreach ($row as $key => $value) {
						$temp=$this->DBModel->array_push_assoc($temp, $key,$value);
					}
					array_push($this->postData, $temp);
				}
			}
		}
	}
	
	function __construct()
	{
		$this->getDBMembers();
		$this->getAllPost();
	}
}


?>