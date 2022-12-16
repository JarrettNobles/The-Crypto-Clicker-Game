<?php
// updaeTabs.php
	session_start();
	
			// insert database info here
			$con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
			if ($con->connect_error)
  			{
  				die('Could not connect to mySQL: ' . $con->connect_error);
  			}
if (isset($_GET['t']))
	{
		$aboutUnlocked=$_GET['t'];
		$UID=$_SESSION['UID'];
		$_SESSION['aboutUnlocked']= $aboutUnlocked;

		$sql="UPDATE Users SET aboutUnlocked='$aboutUnlocked' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
	}
?>
