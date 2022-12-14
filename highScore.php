<?php
  session_start();

  // Try to connect with the MySQL Server
  $con = new mysqli('localhost','root','XPkWWvhWzACj3q','cryptousers');
  if ($con->connect_error)
  {
  die('Could not connect to mySQL: ' . $con->connect_error);
}


?>
<!DOCTYPE html>
<html>
<head>

</head>

<body>
  <link rel="stylesheet" href="crypto.css">
  <center style="align:center">
    <h1 style="text-align:center; color:black"> Crypto Clicker High Scores Page </h1>
    <table>
  <tr>
    <th>Username</th>
    <th>Highscore</th>
     <?php
     
$result = $con->query("SELECT * FROM Users ORDER BY score DESC LIMIT 10");

        if($result)
	{
        while($row = $result->fetch_assoc())
        {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
        echo "</tr>";
        }
       // $resul = mysqli_query($conn, "SELECT * FROM Users");        
	}
        $con->close();
        ?>

</body>
<footer>
<form action="playAgain.html">
		<input type="submit" value="Play Again" />
	</form>
</footer>

</html>
