<html>

<head>

//css

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;

}

</style>

</head>

<body bgcolor="#EEFDEF">
<?php
	$con=mysqli_connect("localhost","root","","PUBG");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT Team_Name, Player_Name, Email, College FROM data";

echo "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>Mobile</th>

<th>email</th>

</tr>";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['Team_Name'] . "</td>";

  echo "<td>" . $row['Player_Name'] . "</td>";

  echo "<td>" . $row['Email'] . "</td>";

  echo "<td>" . $row['College'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

mysqli_close($con);
?>	 
</body>
</html>