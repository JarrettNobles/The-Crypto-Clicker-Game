<?php
session_start();
if (isset($_POST['password']))
{
    $md5Pass = md5($_POST['password']);
    $con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
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
		$_SESSION['UID'] = $result->fetch_assoc()['UID'];
		echo $SESSION['UID'];
		header("Location: game.php");
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
header("Location: login.html");

