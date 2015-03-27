<?php include "include/connect.php";
      include "include/loggedin.php";

//If the user is not logged in, they are redirected to the the signin page
if(!loggedin()){
  header('location: signin.php');     
}
?>


<!doctype html>
<html class="no-js" lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, application admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <!-- /meta -->

    <title>GEM Community - <?php echo $nickname ?></title>

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

<body>
    <div class="app">
        <!-- top header -->
        <header class="header header-fixed navbar">

            <div class="brand">
                <!-- toggle offscreen menu -->
                <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
                <!-- /toggle offscreen menu -->

                <!-- logo -->
                <a href="profile.php" class="navbar-brand">
                    <img src="img/gem-community.png" alt="">
                    <span class="heading-font">
                        GEM Community
                    </span>
                </a>
                <!-- /logo -->
            </div>

            <ul class="nav navbar-nav">
                <li class="hidden-xs">
                    <!-- toggle small menu -->
                    <a href="javascript:;" class="toggle-sidebar">
                        <i class="ti-menu"></i>
                    </a>
                    <!-- /toggle small menu -->
                </li>
                <li class="header-search">
                    <!-- toggle search -->
                    <a href="javascript:;" class="toggle-search">
                        <i class="ti-search"></i>
                    </a>
                    <!-- /toggle search -->
                    <div class="search-container">
                        <form role="search">
                            <input type="text" class="form-control search" placeholder="type and press enter">
                        </form>
                    </div>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown hidden-xs">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="ti-more-alt"></i>
                    </a>
                    <ul class="dropdown-menu animated zoomIn">
                        <li class="dropdown-header">Quick Links</li>
                        <li>
                            <a href="javascript:;">Start New Campaign</a>
                        </li>
                        <li>
                            <a href="javascript:;">Review Campaigns</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;">Settings</a>
                        </li>
                        <li>
                            <a href="javascript:;">Wish List</a>
                        </li>
                        <li>
                            <a href="javascript:;">Purchases History</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;">Activity Log</a>
                        </li>
                        <li>
                            <a href="javascript:;">Settings</a>
                        </li>
                        <li>
                            <a href="javascript:;">System Reports</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:;">Help</a>
                        </li>
                        <li>
                            <a href="javascript:;">Report a Problem</a>
                        </li>
                    </ul>
                </li>

                <li class="notifications dropdown">
                    <a href="javascript:;" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <div class="badge badge-top bg-danger animated flash">
                            <span>3</span>
                        </div>
                    </a>
                    <div class="dropdown-menu animated fadeInLeft">
                        <div class="panel bordered no-m">
                            <div class="panel-heading small"><b>Notifications</b>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="javascript:;">
                                        <span class="pull-left mt5 mr15">
                                            <img src="img/faceless.jpg" class="avatar avatar-sm img-circle" alt="">
                                        </span>
                                        <div class="m-body">
                                            <div class="">
                                                <small><b>CRYSTAL BROWN</b></small>
                                                <span class="label label-danger pull-right">ASSIGN AGENT</span>
                                            </div>
                                            <span>Opened a support query</span>
                                            <span class="time small">2 mins ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:;">
                                        <div class="pull-left mt5 mr15">
                                            <div class="circle-icon bg-danger">
                                                <i class="ti-download"></i>
                                            </div>
                                        </div>
                                        <div class="m-body">
                                            <span>Upload Progress</span>
                                            <div class="progress progress-xs mt5 mb5">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                </div>
                                            </div>
                                            <span class="time small">Submited 23 mins ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="javascript:;">
                                        <span class="pull-left mt5 mr15">
                                            <img src="img/faceless.jpg" class="avatar avatar-sm img-circle" alt="">
                                        </span>
                                        <div class="m-body">
                                            <em>Status Update:</em>
                                            <span>All servers now online</span>
                                            <span class="time small">5 days ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                            <div class="panel-footer">
                                <a href="javascript:;">See all notifications</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="off-right">
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="<?php echo $profile_pic; ?>" class="header-avatar img-circle" style="width:32px;height:32px;" alt="user" title="user">
                        <span class="hidden-xs ml10"><?php echo $nickname ?></span>
                        <i class="ti-angle-down ti-caret hidden-xs"></i>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li>
                            <a href="editprofile.php">Settings</a>
                        </li>
                        <li>
                            <a href="javascript:;">Upgrade</a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <div class="badge bg-danger pull-right">3</div>
                                <span>Notifications</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">Help</a>
                        </li>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- /top header -->

         <section class="layout">
           
            <?php include "sidebar.php" ?>

           