<!DOCTYPE html>
<html lang="en">
<head>
<title>The School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">

            

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="a.php">Back</a></li> 
               </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="logout.php">Logout</a></li>
                  
                   
                </ul>

            </div>

        </div>
    </nav>
</body>


<?php
include 'coree.php';
$z=$_SESSION['user_name'];
if(mysql_connect('localhost','root',''))
{mysql_select_db('rahul_db');
 if(isset($_POST['email']) &&isset($_POST['clas']) && isset($_POST['mobile']) && isset($_POST['addr']))
 {
 $email=htmlentities($_POST['email']);
 $clas=htmlentities($_POST['clas']);
 $mob=htmlentities($_POST['mobile']);
 $addr=htmlentities($_POST['addr']);
 if(filter_var($email,FILTER_VALIDATE_EMAIL)==TRUE)
 {
 $y=" UPDATE `students_data` SET `email`='$email',`class`='$clas',`mobile_no`='$mob',`address`='$addr' WHERE `user_name`='$z' ";
 if(mysql_query($y))
 {
  echo "<h1>RECORDS UPDATED</h1>";
 }
 else echo 'something went wrong';
 }else echo 'you entered wrong email address';
 }
}
?>
<form action="updates.php" method="POST">
Email:<br><input type="text" name="email" ><br><br>
Class:<br><input type="text" name="clas"><br><br>
Mobile-no:<br><input type="text" name="mobile" ><br><br>
Residential Address:<br><input type="text" name="addr" ><br>
<input type="submit" value="save changes">
</form>
<a href="logout.php">logout</a>