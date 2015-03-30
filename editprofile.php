<?php
include "header.php";

if (isset($_POST['submit']) ){
    
    if (!empty($_POST['nickname']) ){
        $new_nickname = $_POST['nickname'];
        mysql_query("UPDATE profile SET nickname='$new_nickname' WHERE id='$my_id'");
    }
    if (!empty($_POST['fullname']) ){
        $new_fullname = $_POST['fullname'];
        mysql_query("UPDATE profile SET fullname='$new_fullname' WHERE id='$my_id'");
    }
    if (!empty($_POST['email']) ){
        $new_email = $_POST['email'];
        mysql_query("UPDATE profile SET email='$new_email' WHERE id='$my_id'");
    }
     if (!empty($_POST['dob']) ){
        $new_dob = $_POST['dob'];
        mysql_query("UPDATE profile SET dob='$new_dob' WHERE id='$my_id'");
    }
    if (!empty($_POST['city']) ){
        $new_city = $_POST['city'];
        mysql_query("UPDATE profile SET city='$new_city' WHERE id='$my_id'");
    }
    if (!empty($_POST['zip']) ){
        $new_zip = $_POST['zip'];
        mysql_query("UPDATE profile SET zip='$new_zip' WHERE id='$my_id'");
    }
     /*if (!empty($_POST['group']) ){
        $new_group = $_POST['group'];
        mysql_query("UPDATE profile SET group='$new_group' WHERE id='$my_id'");
    }*/
    if (!empty($_POST['facebook']) ){
        $new_facebook = $_POST['facebook'];
        mysql_query("UPDATE profile SET facebook='$new_facebook' WHERE id='$my_id'");
    }
    if (!empty($_POST['twitter']) ){
        $new_twitter = $_POST['twitter'];
        mysql_query("UPDATE profile SET twitter='$new_twitter' WHERE id='$my_id'");
    }
	if ($_FILES["files"]['size'] !== 0){
		if (!file_exists("users")){
		mkdir("users", 0777);
		chmod("users", 0777);
		}
		if(!file_exists("users/".$username)){
		mkdir("users/$username", 0777, true);
		chmod("users/$username", 0777);
		}
		if(!file_exists("users/".$username."/photos/")){
		mkdir("users/".$username."/photos", 0777, true);
		chmod("users/".$username."/photos", 0777);
		}
		$uploadOk = 1;
		$target_dir = "users/".$username."/photos/";
		$imagename1 = str_split($usename,3);
		$imagename = $imagename1[0].rand(0,999999).strtotime('now');
		$target_file = $target_dir . $imagename;
		$imageFileType = pathinfo($_FILES['files']['name'],PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		$check = getimagesize($_FILES['files']['tmp_name']);
		
		// Check if file already exists
		if (file_exists($target_file)) {
			$error = "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["files"]["size"] > 5000000) {//5 MBs
			$error = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg"
		&& $imageFileType !== "gif" ) {
			$error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		
		$bb = explode('/',$_FILES['files']['type']);
		$b = $bb[1];
		
		
		if($check !== false && $uploadOk == 1) {
			if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file.".".$imageFileType)) {
				$URLL = "/social/".$target_file.".".$imageFileType;
				//echo "##".$my_id;
				mysql_query("UPDATE profile SET picture='$URLL' WHERE id='$my_id'");
				chmod($target_file.".".$imageFileType, 0777);
			} else {
				//echo "Sorry, there was an error uploading your file.";
				echo "File is not an image or their was an error!";
				echo "Error: $error";
			}
		} else {
			echo "File is not an image or their was an error!";
			echo "Error: $error";
			$uploadOk = 0;
		}
	}
 ?> <!--<meta http-equiv="refresh" content="0; url=http://gemmovement.com/social/profile.php" />-->
				<?php   
} ?>

    
    


            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">

                    <!-- inner content wrapper -->
                    <div class="wrapper">
                        

                         <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">Edit Profile</header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="#">
                                            
                                             <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Profile Picture</label>
                                                <div class="col-sm-10">
													<img src="<?php echo $profile_pic;?>" style="width: 100px;height:100px;" class="//form-control img-circle"/>
                                                    <input type="file" name="files" class="form-control" name="photo">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Full Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="fullname" placeholder="<?php echo $fullname ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="email" placeholder="<?php echo $email ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="dob" placeholder="<?php echo $dob ?>">
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label class="col-sm-2 control-label">City</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="city" placeholder="<?php echo $city ?>">
                                                </div>
                                            </div>
                                            
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label">Zip</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="zip" placeholder="<?php echo $zip ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Group</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="group" placeholder="<?php echo $group ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Facebook</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="facebook" placeholder="<?php echo $user_facebook ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Twitter</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="twitter" placeholder="<?php echo $user_twitter ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">My Hero</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="hero" placeholder="">
                                                </div>
                                            </div>
                                            
                                            <header class="panel-heading">Settings</header><br>
                                            
                                             <div class="form-group"> 
                                                <label class="col-sm-2 control-label">View Profile Settings</label>
                                                <div class="col-sm-10">
                                                    <select>
                                                        <option value="Everyone">Everyone</option>
                                                        <option value="Friends and Followers Only">Friends and Followers Only</option>
                                                        <option value="Friends Only">Friends Only</option>
                                                        <option value="I choose">I Choose</option>
                                                        <option value="No One">No One</option>                                              
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Wall Posts</label>
                                                <div class="col-sm-10">
                                                    <select>
                                                        <option value="Only Me">Only Me</option>
                                                        <option value="Friends Only">Friends Only</option>
                                                        <option value="Everyone">Everyone</option>                                              
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Show Liked Posts on Wall</label>
                                                <div class="col-sm-10">
                                                    <select>
                                                        <option value="On">On</option>
                                                        <option value="Off">Off</option>                                           
                                                    </select>
                                                </div>
                                            </div>
                                                
                                            
                                            <div classs="col-sm-10">
                                                    <button class="btn btn-primary stepy-finish pull-right" name="submit">Finish</button>
                                                </div>

                                        

                <!-- /content wrapper -->
                <a class="exit-offscreen"></a>
            </section>
            <!-- /main content -->
        </section>

    </div>
                             </div>

    <!-- core scripts -->
    <script src="plugins/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <script src="plugins/jquery.easing.min.js"></script>
    <script src="plugins/appear/jquery.appear.js"></script>
    <script src="plugins/jquery.placeholder.js"></script>
    <script src="plugins/fastclick.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <script src="plugins/stepy/jquery.validate.min.js"></script>
    <script src="plugins/stepy/jquery.stepy.js"></script>
    <script src="plugins/fuelux/wizard.js"></script>
    <script src="plugins/chosen/chosen.jquery.min.js"></script>
    <!-- /page level scripts -->

    <!-- template scripts -->
    <script src="js/offscreen.js"></script>
    <script src="js/main.js"></script>
    <!-- /template scripts -->

    <!-- page script -->
    <script src="js/form-wizard.js"></script>
    <!-- /page script -->

</body>
<!-- /body -->

</html>
