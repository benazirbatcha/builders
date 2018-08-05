<?php include('../Asserts/includes/includes.php') ?>
<!--main content start-->
<div id="content" class="ui-content ui-content-aside-overlay">
    <div class="ui-content-body">
        <div class="ui-container">
            <div class="row">
            	<div class="container">
            		<div class="row" style="height: 100px;"></div>
					<div class="row">
						<div class="col-md-5">	<?php echo $_SESSION['user_id']; ?>
						</div>
						<div class="col-md-2 well">
							<form method ="post">
								<div class="form-group">
									<label>User name</label>
									<input type="text" name="user_name" class="form-control " placeholder="Name" required>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control" placeholder="Password" required>
								</div>
								<div class="form-group">
									<label>&nbsp;</label>
									<input type="submit" name="login_btn" class="form-control btn btn-success">
								</div>
							</form>
						</div>
						<div class="col-md-5"></div>
					</div>		
				</div>
            </div>
        </div>
    </div>
</div>
<!--main content end-->
<?php include('../views/Layouts/footer.php'); ?>



<?php 
	if (isset($_POST['login_btn'])) {
		$aut= $FCobj->authUser($_POST['user_name'], $_POST['password']);
		if ($aut==1) {
			echo "<script>location.href='dash.php';</script>";
		}else{
			echo "<script>alert('Login Faild')</script>";
		}
	}
?>
