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
 ?> <meta http-equiv="refresh" content="0; url=http://gemmovement.com/social/profile.php" />
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
                                        <form class="form-horizontal" role="form" method="post" action="#">
                                            
                                            <div class="form-group"> 
                                                <label class="col-sm-2 control-label">Nickname</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="nickname" placeholder="<?php echo $nickname ?>">
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
