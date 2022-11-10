<?php

	session_start();
	if (isset($_POST['password1']))
	{
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
			$sql = "INSERT INTO Users (username, Password, score) VALUES ('$_POST[username]','$md5Pass','0')";
			echo "Built sql: " . $sql;

	        	if (!$con->query($sql)=== TRUE)
       		   	{
       		   		die('Error adding User: ' . $con->error);
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


