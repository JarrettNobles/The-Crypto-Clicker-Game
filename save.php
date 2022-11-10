<?php

	session_start();
	if (isset($_POST['score']))
	{
		
			//database insertion
			$sql = "INSERT INTO Users (score) VALUES ('$_POST[score]')";
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