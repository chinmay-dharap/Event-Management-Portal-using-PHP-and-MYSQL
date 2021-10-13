<html>

<head>



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

if ($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
    echo "<table border='1'>

<tr>

<th>Team Name</th>

<th>Player Name</th>

<th>Email</th>

<th>College</th>

</tr>";
  while ($row=mysqli_fetch_row($result))
    {
    echo "<tr>";

  echo "<td>" . $row['0'] . "</td>";

  echo "<td>" . $row['1'] . "</td>";

  echo "<td>" . $row['2'] . "</td>";

  echo "<td>" . $row['3'] . "</td>";

  echo "</tr>";
   
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>	 
</body>
</html>