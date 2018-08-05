
<?php 
include('../models/UsersModel.php');
include('../models/PostModel.php');
include('../models/MessageModel.php');

/**
 * Forum Controller
 */

class ForumController 
{
	public $userModelObj;
	public $postModelObj;
	public $msgModelObj;

	public function authUser($userID,$password)
	{
		$id=explode('UID',$userID);
		if (isset($id[1])) {
			if (array_key_exists($id[1], $this->userModelObj->userData))
			  {
			  	if ($this->userModelObj->userData[$id[1]]['user_id']=="$userID" && $this->userModelObj->userData[$id[1]]['password']=="$password") {
					$_SESSION['user_id']=$userID;
					return 1;
				}else{
					return 0;
				}
			  }
			else
			  {
			  echo "Key does not exist!";
			  }
		}
	}

	public function getUserName($user_ID)
	{
		unset($this->userData[0]);
		$user_name="";
		$length=sizeof($this->userModelObj->userData);
		for ($i=1; $i <=$length ; $i++) { 
			if ($user_ID==$this->userModelObj->userData[$i]['user_id']) {
				return 	$this->userModelObj->userData[$i]['user_name'];
			}
		}
	}

	
	function __construct()
	{
		$this->userModelObj=new UserModel();
		$this->postModelObj=new PostModel();
		$this->msgModelObj=new MessageModel();
	}
}

$FCobj=new ForumController();

?>