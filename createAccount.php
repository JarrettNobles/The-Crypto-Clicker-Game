<?php

	session_start();
	if (isset($_POST['password1']))
	{
		if ($_POST['password1'] == $_POST['password2'])
		{
			$md5Pass = md5($_POST['password1']);
			echo 'Password check.  Hash to: ' . $md5Pass . "<br>";
			// insert database info here
			$con = new mysqli('localhost','root','eBMcvmNiPRx7Wi','lampusers');
			if ($con->connect_error)
  			{
  				die('Could not connect to mySQL: ' . $con->connect_error);
  			}
			//database insertion
			$sql = "INSERT INTO cryptousers (Username, Password) VALUES ('$_POST[Username]', '$_POST[Password]', '$md5Pass')";
			echo "Built sql: " . $sql;

	        	if (!$con->query($sql)=== TRUE)
       		   	{
       		   		die('Error adding User: ' . $con->error);
			}
			//change this to have the mining page
			header("Location: https://mercer.edu");
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

<html>
	<head>
		<title>Create Your Account</title>
	</head>
	
	<body>

	</body>
</html>
