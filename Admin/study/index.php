<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<style type="text/css">
		body{

			margin: 0px;
			border: 0px;
		} 
		#header{
			width: 100%;
			height: 120px;
			background: #3498db;
			color: black;
			text-decoration: all;
			font-size: 17px;

		}
		#sidebar{
			width: 300px;
			height: 700px;
			background:#9b59b6;
			float: left;
		}
		#data{
			height: 700px;
			background: #f1c40f;
			font-size: 25px;
			color:#1B1464;
			font-family: Helvetica;
		}
		#adminlogo
		{
		    height: 70px;
		}
		ul li{
			padding: 20px;
			border-bottom: 2px solid black;
		}
		ul li:hover{
			background: #D980FA;
			color: white;

		}
	</style>
</head>
<body>
<div id="header">
	<center><img src="admin1.png" alt="admin_logo" id="adminlogo"></center>
	<center><b>Admin Panel</b></center>
	<center><b>Please Proceed With Caution !!</b></center>
</div>

<div id="sidebar">
	<ul>
		<li><a href="pubg2.php" style="color: white; text-decoration: none;">PUBG</a></li>
		<li><a href="add.php" style="color: white; text-decoration: none;"> Add Data </a></li>
		<li><a href="dele.php" style="color: white; text-decoration: none;"> Delete Data</a> </li>
		<li> Update Data </li>
		<li ><a href="" style="color: white; text-decoration: none;"> LogOut </a></li>
	</ul>

</div>

<div id="data"><br>
	
	<center><h3></h3></center>
</div>
</body>
</html>