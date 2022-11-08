<?php

	session_start();
	if (isset($_POST['password1']))
	{
		//we need to figure out what leads up to here button wise Tanner found on stack over flow
		if ($_POST['password1'] == $_POST['password2'])
		{
			$md5Pass = md5($_POST['password1']);
			echo 'Password check.  Hash to: ' . $md5Pass . "<br>";
			// insert database info here
			$con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
			if ($con->connect_error)
  			{
  				die('Could not connect to mySQL: ' . $con->connect_error);
  			}
			//database insertion
			$sql = "INSERT INTO Users (score) VALUES ('$_POST[score]')";
			echo "Built sql: " . $sql;

	        	if (!$con->query($sql)=== TRUE)
       		   	{
       		   		die('Error adding Score: ' . $con->error);
			}
			//change this to have the mining page
			header("Location: game.php");
       	 	}

		else
			{
			die('Passwords do not match');
			}
	}
	else
	{
  		echo "Send me the data";
	}

?> 