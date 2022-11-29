<?php
session_start();
if (isset($_POST['Password']))
{
    $md5Pass = md5($_POST['Password']);
    $con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
		if ($con->connect_error)
  		{
  		die('Could not connect to mySQL: ' . $con->connect_error);
  		}

   $sql = "SELECT  * FROM Users Where username='$_POST[username]' AND Password='$md5Pass';";



if ($result=mysqli_query($con,$sql))
  {
    // Return the number of rows in result set
    $rowcount=mysqli_num_rows($result);
    if ($rowcount == 1)
    {
	    $_SESSION['loggedin']=1;
		$_SESSION['UID'] = $result->fetch_assoc()['UID'];
		echo $_SESSION['UID'];
		header("Location: game.php");
die("this should work");
    }
        else
    {
   	     die('Bad username and password: rowcount: ' . $rowcount . ' md5: ' . $md5Pass);
    }
  }
else
  {
	die('Need a password');
  }
}
header("Location: index.html");
?>
