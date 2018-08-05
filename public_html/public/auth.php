
<?php
	if (isset($_SESSION['user_id'])) {
		if ($_SESSION['user_id']=="") {
			echo "<script>location.href='index.php';</script>";
		}
	}else{
		echo "<script>location.href='index.php';</script>";
	} 
?>




