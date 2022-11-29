<?php
session_start();
if (isset($_SESSION['loggedin']))
{
	session_unset();
	session_destroy();
	header("Location: playAgain.html");
}
else
  {
	die('You need to be logged in to logout.');
  }
?>
