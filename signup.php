<?php include "include/connect.php"; 
	if (isset($_POST['submit']) ){
	if (isset($_POST['username'])){
	if (isset($_POST['password'])){
	if (isset($_POST['email'])){
	if (isset($_POST['accept'])){
		if ($_POST['password'] == $_POST['cpassword']){
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$email = $_POST['email'];
		
		mysql_query("INSERT INTO profile(username, password, email) VALUES('$username', '$password', '$email')");
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
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                    <section class="panel bg-white no-b">
                        <ul class="switcher-dash-action">
                            <li><a href="signin.php" class="selected">Sign in</a></li>
                            <li class="active"><a href="#" class="">New account</a></li>
                        </ul>
                        <div class="p15">  
                            <form role="form" action="#" method="post" name="signup">
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
                            </form>
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
</body>

</html>
