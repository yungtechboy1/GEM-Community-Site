<?php include "include/connect.php";
      include "include/loggedin.php";

//If the user is not logged in, they are redirected to the the signin page
if(!loggedin()){
  header('location: signin.php');     
}
else{
    header('location: profile.php');
}
?>



