<!DOCTYPE html>
<html lang="en">
<head>
<title>The School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
.out {position:absolute;left:200px;}
</style>
</head>
<body>



    


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="students_data.php">Your whole data</a></li>
                    <li><a href="message.php">Messages</a></li>
                    
                                     </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="logout.php">Logout</a></li> 
                   
                </ul>

            </div>

        </div>
    </nav>
<a href="a.php">
<?php
include 'coree.php';
$con=mysql_connect('localhost','root','');
if($con)
{$to=$_SESSION['user_name'];
 mysql_select_db('rahul_db');
 $query="SELECT `notice` FROM `notices`";
 $query_run=mysql_query($query);
 while($rows=mysql_fetch_assoc($query_run))
 {
  $output=$rows['notice'];
  echo '<div class="out">' .$output . '</div><br>';
 }
}
?></a>
</body>
</html>