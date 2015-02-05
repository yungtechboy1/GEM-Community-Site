<?php

include 'include/connect.php';
include 'include/loggedin.php';

session_destroy();
header('location: signin.php');
?>