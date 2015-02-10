<?php include "include/connect.php"; 
	if (isset($_POST['submit']) ){
	if (isset($_POST['username'])){
	if (isset($_POST['password'])){
	if (isset($_POST['email'])){
	if (isset($_POST['accept'])){
    if (isset($_POST['nickname'])){
    if (isset($_POST['dob'])){
    if (isset($_POST['city'])){
    if (isset($_POST['zip'])){
    if (isset($_POST['facebook'])){
    if (isset($_POST['twitter'])){
		if ($_POST['password'] == $_POST['cpassword']){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
        $nickname = $_POST['nickname'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
		
		mysql_query("INSERT INTO profile(username, password, email, nickname, dob, city, zip, facebook, twitter) VALUES('$username', '$password', '$email', '$nickname', '$dob', '$city', '$zip', '$facebook', '$twitter')");
		echo ("Congrads It Works!");
		}else{
		echo ("YOUR PASSWORDS DONT MATCH!!!");
		}
		
	}else{
		echo ("<script>alert('Please accept the Terms and Conditions')</script>");
	}
	}
	}
	}
	}
    }
    }
    }
    }
    }
    }

?>

<!doctype html>
<html class="signup no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>Sublime - Web Application Admin Dashboard</title>

    <!-- page level plugin styles -->
    <link rel="stylesheet" href="plugins/stepy/jquery.stepy.css">
    <link rel="stylesheet" href="plugins/chosen/chosen.min.css">
    <!-- /page level plugin styles -->

    <!-- core styles -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- /core styles -->

    <!-- template styles -->
    <link rel="stylesheet" href="css/skins/palette.css">
    <link rel="stylesheet" href="css/fonts/font.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- template styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="plugins/modernizr.js"></script>
</head>

<body class="bg-info"> 
    <div class="center-wrapper">
        <div class="center-content">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                    <section class="panel bg-white no-b">
                        <ul class="switcher-dash-action">
                            <li><a href="signin.php" class="selected">Sign in</a></li>
                            <li class="active"><a href="#" class="">New account</a></li>
                        </ul>
                        
                            <!-- <form role="form" action="#" method="post" name="signup">
                                <input type="text" class="form-control input-lg mb25" placeholder="Choose a username" name="username" autofocus>
                                <input type="text" class="form-control input-lg mb25" placeholder="Email address" name="email">
                                <input type="password" class="form-control input-lg mb25" placeholder="Password" name="password">
                                <input type="password" class="form-control input-lg mb25" placeholder="Confirm password" name="cpassword">
                                <div class="show">
                                    <label class="checkbox">
                                        <input type="checkbox" value="remember-me" name="accept">I accept
                                    <a href="javascript:;">Sublime's</a>terms and conditions
                                    </label>
                                </div>
                                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Sign up</button>
                            </form> -->
                            
                            
                             <div class="widget">
                            <div class="widget-body no-p">
                                <form id="stepy" class="stepy" action="#" method="post" name="signup">

                                    <?php
                                    //STEP 1: USERNAME, EMAIL, PASSWORD, CONFIRM PASSWORD, AGREE
                                    ?>
                                    <fieldset title="Login">

                                        <legend>Access</legend>
                                        <input type="hidden" name="id" />

                                        <div class="form-group">
                                            <label>Username</label>
                                            <div>
                                                <input id="username" type="text" class="form-control" placeholder="username" name="username" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <div>
                                                <input id="email" type="email" class="form-control" placeholder="email" name="email" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>
                                            <div>
                                                <input id="password" type="password" class="form-control" placeholder="password" name="password" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <div>
                                                <input id="cpassword" type="password" class="form-control" placeholder="confirm password" name="cpassword" />
                                            </div>
                                            <label class="checkbox">
                                        <input type="checkbox" value="remember-me" name="accept">I accept
                                    <a href="javascript:;"> GEM </a>terms and conditions
                                    </label>
                                        </div>                         
                                    </fieldset>

                                    <?php
                                    //STEP 2: NiCKNAME, DOB, CITY, ZIP
                                    ?>
                                    <fieldset title="Personal">

                                        <legend>Personal Details</legend>

                                        <div class="form-group">
                                            <label>Nickname</label>
                                            <div>
                                                <input id="nickname" type="text" class="form-control" placeholder="nickname" name="nickname" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                             <div>
                                                <input id="dob" type="text" class="form-control" placeholder="mm/dd/yyyy" name="dob" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>City</label>
                                             <div>
                                                <input id="city" type="text" class="form-control" placeholder="ex. Baltimore, MD" name="city" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Zip</label>
                                             <div>
                                                <input id="zip" type="text" class="form-control" placeholder="ex. 12345" name="zip" />
                                            </div>
                                        </div>

                                        
                                    </fieldset>

                                    <fieldset title="Professional">

                                        <legend>Professional profile</legend>

                                        <!-- <div class="form-group skills">
                                            <input id="ruby" type="checkbox" name="ruby" />
                                            <label for="ruby">Ruby</label>

                                            <input id="python" type="checkbox" name="python" />
                                            <label for="python">Python</label>

                                            <input id="java" type="checkbox" name="java" />
                                            <label for="java">Java</label>

                                            <input id="javascript" type="checkbox" name="javascript" />
                                            <label for="javascript">Javascript</label>
                                        </div> -->

                                         <div class="form-group">
                                            <label>Facebook</label>
                                             <div>
                                                <input id="facebook" type="text" class="form-control" placeholder="Facebook ID" name="facebook" />
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Twitter</label>
                                             <div>
                                                <input id="twitter" type="text" class="form-control" placeholder="Twitter Handle" name="twitter" />
                                            </div>
                                        </div>
                                    </fieldset>

                                    <button class="btn btn-primary stepy-finish pull-right" type="submit" name="submit">Finish</button>

                                </form>
                            </div>
                        </div>
                            
                            
                            <div class="p15">  
                        </div>            

                    </section>
                    <p class="text-center">
                        Copyright &copy;
                        <span id="year" class="mr5"></span>
                        <span>Sublime LLC</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var el = document.getElementById("year"),
            year = (new Date().getFullYear());
        el.innerHTML = year;
    </script>
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

</html>
