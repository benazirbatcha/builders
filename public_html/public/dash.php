<?php include('../Asserts/includes/includes.php') ?>
<?php include('auth.php') ?>
<!--main content start-->
<div id="content" class="ui-content ui-content-aside-overlay">
    <div class="ui-content-body">
        <div class="ui-container">
            <div class="row">
               <form method="post">
                   <div class="container ">
                       <center><h3>Forum</h3></center><hr>
                       <div class="row">
                           <div class="col-md-1">
                                <h5>Add New Post</h5>
                            </div>
                           <div class="col-md-7">
                                <input type="text" name="post" class="form-control" required>
                            </div>
                           <div class="col-md-2">
                                <input type="file" name="photo" class="form-control" required>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="post_btn" class="btn btn-primary">
                            </div>
                 </form>
                       </div><hr>
                      <!--  <div class="row">
                           <div class="col-md-3"><h3>Corresponding Img</h3></div>
                           <div class="col-md-6"><h3>No of Post & Replies</h3></div>
                           <div class="col-md-3"></div>
                       </div> -->
   <?php 
        $userData =$FCobj->userModelObj->userData;
        $postData =$FCobj->postModelObj->postData;
        $msgData =$FCobj->msgModelObj->messageData;
        unset($userData[0]);
        unset($msgData[0]);
        $lenth=sizeof($msgData);
        unset($postData[0]);
        foreach ($postData as $key) {  ?>
            <div class='row'>
                <div class='col-md-3'><h5><?php echo $key['post_ph']; ?></h5></div>
                <div class='col-md-5 well'>
                    <h5><?php echo $key['post_msg']; ?> | <?php echo $FCobj->getUserName($key['user_id']); ?></h5>
                    <span><h6>Replies</h6> 
                        <?php 
                            for ($i=1; $i <=$lenth ; $i++) { 
                               $temp=($msgData[$i][2]==$key['post_id'])? 1:0;
                                if ($temp==1) {
                                    $name=$FCobj->getUserName($msgData[$i]['user_id']);
echo "<li>".$msgData[$i]['message']."<span class='pull-right'>".$name." | ".$msgData[$i]['sent_date']."</span></li>";
                                }
                            }
                         ?>

                    </span><br>
<form method='post'>
    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
    <input type='hidden' name='post_id' value=<?php echo $key['post_id']; ?> >
    <input type='text' name='message' class='form-control' placeholder='write comment'><br>
    <input type='file' name='cmt_photo' class='form-control pull-left' placeholder='Choose File' style="width:50%;">
    <input type='submit' name='reply_btn<?php echo $key['post_id']; ?>' value='Reply' class='btn btn-success pull-right'>
</form><br><br>
<?php 
$btn="reply_btn".$key['post_id']; 
 if (isset($_POST[$btn])) {
        $FCobj->msgModelObj->msgInsert($_POST['message'],$_POST['post_id'],$_POST['user_id']);
    }
 ?>
                </div>
                <div class='col-md-4'>
                </div>
            </div>
    <?php
        }
   ?>
                   </div>
            </div>
        </div>
    </div>
</div>
<!--main content end-->
<?php include('../views/Layouts/footer.php'); ?>

<?php 
    if (isset($_POST['post_btn'])) {
        $FCobj->postModelObj->postInsert($_POST['post'],$_POST['photo']);
    }
    if (isset($_POST['reply_btn'])) {
        $FCobj->msgModelObj->msgInsert($_POST['message'],$_POST['post_id'],$_POST['user_id']);
    }

?>