<!doctype html>
<html class="error-page no-js" lang="">

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

<!-- body -->

<body class="bg-primary">

    <!-- error wrapper -->
    <div class="center-wrapper">

        <div class="center-content text-center">

            <h1>Registered</h1>

            <div class="mb25">Please check the email you used to register for a confirmation email.</div>

            <p><a href="signin.php">Login Here</a></p>

            <!--
            <ul class="mt25 error-nav">
                <li>
                    <a href="javascript:;">&copy;
                        <span id="year" class="mr5"></span>Sublime LLC</a>
                </li>
                <li>
                    <a href="javascript:;">About</a>
                </li>
                <li>
                    <a href="javascript:;">Help</a>
                </li>
                <li>
                    <a href="javascript:;">Status</a>
                </li>
            </ul> -->
        </div>
    </div>
    <!-- /error wrapper -->

    <script type="text/javascript">
        var el = document.getElementById("year"),
            year = (new Date().getFullYear());
        el.innerHTML = year;
    </script>
</body>
<!-- /body -->

</html>
