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
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<b> <big>TEAM Name :- </big></b> %s <br><b> <big> Player Name :- </big></b>%s <br> <b> <big>Email Address :- </big></b>%s <br> <b> <big>College Name :- </big></b>%s <br><br>",$row[0],$row[1],$row[2],$row[3]);
   
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>	 