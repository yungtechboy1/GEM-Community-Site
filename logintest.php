<?php include "include/connect.php";
      include "include/loggedin.php";
?>

<h1>Login Test</h1>

<?php if(loggedin()){ ?> 
<p>Hooray, you are logged in!</p>
<p>
Username: <b><?php echo $username ?></b><br>
Email: <b><?php echo $email ?></b>
    <br><br>
<a href="logout.php">Logout</a>
</p>

<?php } else{  ?>
<p>Aw, you don't appear to be logged in. *sadface*</p>
<?php
  }
?>