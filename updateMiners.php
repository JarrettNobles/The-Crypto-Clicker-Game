<?php

	session_start();
	
			// insert database info here
			$con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
			if ($con->connect_error)
  			{
  				die('Could not connect to mySQL: ' . $con->connect_error);
  			}
if (isset($_GET['m']))
	{
		$miniCount=$_GET['m'];
		$UID=$_SESSION['UID'];
		$_SESSION['mini']= $miniCount;

		$sql="UPDATE Users SET mini='$miniCount' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
	}

if (isset($_GET['a']))
	{
		$asicCount=$_GET['a'];
		$UID=$_SESSION['UID'];
		$_SESSION['asic']= $asicCount;

		$sql="UPDATE Users SET asic='$asicCount' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
	}
if (isset($_GET['l']))
	{
		$l3Count=$_GET['l'];
		$UID=$_SESSION['UID'];
		$_SESSION['l3']= $l3Count;

		$sql="UPDATE Users SET l3='$l3Count' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
	}
if (isset($_GET['h']))
	{
		$hydroCount=$_GET['h'];
		$UID=$_SESSION['UID'];
		$_SESSION['hydro']= $hydroCount;

		$sql="UPDATE Users SET hydro='$hydroCount' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
	}

if (isset($_GET['g']))
	{
		$gpuIdx=$_GET['g'];
		$UID=$_SESSION['UID'];
		$_SESSION['gpu']= $gpuIdx;

		$sql="UPDATE Users SET gpuIdx='$gpuIdx' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
}

if (isset($_GET['v']))
	{
		$incVal=$_GET['v'];
		$UID=$_SESSION['UID'];
		$_SESSION['incVal']= $incVal;

		$sql="UPDATE Users SET incVal='$incVal' WHERE UID='$UID'";

	if (!$con->query($sql)=== TRUE)
		{
			die('Error adding score: ' . $con->error);
		}
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

