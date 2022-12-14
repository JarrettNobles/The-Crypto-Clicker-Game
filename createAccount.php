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
			
		/*	if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
         
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
              // might want to change post to $ variable
			  $new_img_name = uniqid($_POST[username], true).'.'.$img_ex_to_lc;
               $img_upload_path = '../images/'.$new_img_name;
               move_uploaded_file($tmp_name, $img_upload_path); //might have to change upload path to image path
		 */	
			
			
			//database insertion
			$sql = "INSERT INTO Users (username, Password, score) VALUES ('$_POST[username]','$md5Pass','0')";
			//echo "Built sql: " . $sql;

	        	if (!$con->query($sql)=== TRUE)
       		   	{
				die('Error adding User: ' . $con->error);
				//header("Location: login.html")
			}
			//change this to have the mining page
			header("Location: login.html");
			echo "Enter your Username and password to login";
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


