<?php

	session_start();
	
			// insert database info here
			$con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
			if ($con->connect_error)
  			{
  				die('Could not connect to mySQL: ' . $con->connect_error);
  			}
			//database insertion
			/*if (isset($_POST['score']))
        {
			$sql = "Update Users (score) VALUES ('$_POST[score]')";
			echo "Built sql: " . $sql;

	        	if (!$con->query($sql)=== TRUE)
       		   	{
       		   		die('Error adding Score: ' . $con->error);
			}*/
if (isset($_GET['s']))
        {
		$score=$_GET['s'];
		$UID=$_SESSION['UID'];
		$_SESSION['score']= $score;
	
		$sql="UPDATE Users SET score='$score' WHERE UID='$UID'";

        if (!$con->query($sql)=== TRUE)
          {
          die('Error adding score: ' . $con->error);
          }
	echo "update success";		
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
?> 
