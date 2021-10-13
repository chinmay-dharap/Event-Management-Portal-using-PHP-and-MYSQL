<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    
    <title>Register</title>

    
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

   
    <link href="css/main.css" rel="stylesheet" media="all">
<?php
error_reporting(0); 
include 'connection.php';

$user = $_POST['user'];
$mail = $_POST['mail'];
$clg = $_POST['clg'];
$sql = "INSERT into face (Player_Name, Contact, College) values ('$user','$mail','$clg')";

if ($_POST['submit'])
{
	if (mysqli_query($conn,$sql))
	{
		echo "Data Added Succesfully";
	}
	else {
		echo "Something Went Wrong";
	}
}
	

?>
</head>
<body>
	<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Face Painting Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        
                       
                        <div class="form-row">
                            <div class="name">Name </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user" placeholder="Participant's Name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mail" placeholder="e.g. 8956458756">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="clg" placeholder="College_Name">
                                </div>
                            </div>
                        </div>

                       
                        <div>
                            <center><button class="btn btn--radius-2 btn--red" type="submit" name="submit" value="Send Info">Register</button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
</body>
</html>