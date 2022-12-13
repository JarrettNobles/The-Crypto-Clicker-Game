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
if (isset($_POST['score']))
        {
		$score=$_POST['score'];
		$UID=$_SESSION['UID'];
	
	$sql="UPDATE Users SET score='$score'
	WHERE UID='$UID'";

$data=$_POST['score'];
   
       // $sql="INSERT INTO Users(score) VALUES('score='$_POST[score]'')
	//WHERE UID='$_SESSION[UID]'";
//('$_POST[score]')";

        if (!$con->query($sql)=== TRUE)
          {
          die('Error adding score: ' . $con->error);
          }
        }
			
			//change this to have the mining page
			header("Location: playAgain.html");
			{

		/*else
			{
			die('Passwords do not match');
			}*/
	}
	/*else
	{
  		echo "Send me the data";
	}*/

?> 
