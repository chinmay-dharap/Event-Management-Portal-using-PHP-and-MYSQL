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
$team = $_POST['team'];
$user1 = $_POST['user1'];
$mail1 = $_POST['mail1'];
$clg1 = $_POST['clg1'];
$cid1 = $_POST['cid1'];

$user2 = $_POST['user2'];
$mail2 = $_POST['mail2'];
$clg2 = $_POST['clg2'];
$cid2 = $_POST['cid2'];

$user3 = $_POST['user3'];
$mail3 = $_POST['mail3'];
$clg3 = $_POST['clg3'];
$cid3 = $_POST['cid3'];

$user4 = $_POST['user4'];
$mail4 = $_POST['mail4'];
$clg4 = $_POST['clg4'];
$cid4 = $_POST['cid4'];

$sql = "INSERT into pubg (Team_Name, Player1_Name, Contact1, College1, College_Id1 ,Player2_Name, Contact2, College2,College_Id2 ,Player3_Name, Contact3, College3, College_Id3,Player4_Name, Contact4, College4,College_Id4) values ('$team','$user1','$mail1','$clg1','$cid1','$user2','$mail2','$clg2' ,'$cid2', '$user3','$mail3','$clg3' ,'$cid3', '$user4','$mail4','$clg4','$cid4')";

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
                    <h2 class="title">PUBG Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        
                        <div class="form-row">
                            <div class="name">Team Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="team" placeholder="Team_Name">
                                </div>
                            </div>
                        </div>
                        <br><br><br>

                        <div class="form-row">
                            <div class="name">Player 1</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user1" placeholder="Player1_Name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mail1" placeholder="e.g. 9856421568">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="clg1" placeholder="College_Name">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College Id</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cid1" placeholder="College_Id">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br><br>

                        <div class="form-row">
                            <div class="name">Player 2</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user2" placeholder="Player2_Name">
                                </div>
                            </div>
                        </div>

                       <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mail2" placeholder="e.g. 9856421568">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="clg2" placeholder="College_Name">
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="name">College Id</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cid2" placeholder="College_Id">
                                </div>
                            </div>
                        </div><br><br><br>


                        <div class="form-row">
                            <div class="name">Player 3</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user3" placeholder="Player3_Name">
                                </div>
                            </div>
                        </div>

                       <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mail3" placeholder="e.g. 9856421568">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="clg3" placeholder="College_Name">
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="name">College Id</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cid3" placeholder="College_Id">
                                </div>
                            </div>
                        </div><br><br><br>


                        <div class="form-row">
                            <div class="name">Player 4</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="user4" placeholder="Player4_Name">
                                </div>
                            </div>
                        </div>

                       <div class="form-row">
                            <div class="name">Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mail4" placeholder="e.g. 9856421568">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">College Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="clg4" placeholder="College_Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">College Id</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="cid4" placeholder="College_Id">
                                </div>
                            </div>
                        </div>



                        <div>
                            <center><button class="btn btn--radius-2 btn--red" type="submit" name="submit" value="Send Info">Register</button></center>
                        </div><br>
                       
                        
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