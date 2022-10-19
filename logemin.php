<?php
session_start();
if (isset($_POST['password']))
{
    $md5Pass = md5($_POST['password']);
    $con = new mysqli('localhost','root','eBMcvmNiPRx7Wi','lampusers');
		if ($con->connect_error)
  		{
  		die('Could not connect to mySQL: ' . $con->connect_error);
  		}

   $sql = "SELECT  * FROM Users Where userid='$_POST[username]' AND password='$md5Pass';";

if ($result=mysqli_query($con,$sql))
  {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    if ($rowcount == 1)
    {
	    $_SESSION['loggedin']=1;
    }
        else
    {
   	     die('Error adding User: ' . $con->error);
    }
  }
else
  {
	die('Need a password');
  }
}
header("Location: favs.php");

