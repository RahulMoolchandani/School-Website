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
<?php
include 'coree.php';
$user=$_SESSION['user_name'];
if(mysql_connect('localhost','root',''))
{
 mysql_select_db('rahul_db');
 $query=" SELECT * FROM `students_data` WHERE `user_name`='$user' ";
 $rrun=mysql_query($query);
 $id=mysql_result($rrun,0,'scholar_id');
 $name=mysql_result($rrun,0,'Name');
 $fn=mysql_result($rrun,0,'Father_name');
 $mn=mysql_result($rrun,0,'Mother_name');
 $email=mysql_result($rrun,0,'email');
 $cla=mysql_result($rrun,0,'class');
 $mob=mysql_result($rrun,0,'mobile_no');
 $add=mysql_result($rrun,0,'address');
}
?>
<body>
 <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                <li class="active"><a href="notice.php">Back</a></li> 
               </ul>

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="logout.php">Logout</a></li>
                  
                   
                </ul>

            </div>

        </div>
    </nav>

 <table class="table" >
 <thead>
 <tr>
 <th>Scholar_id</th>
 <th>Name</th>
 <th>Father's Name</th>
 <th>Mother's Name</th>
 <th>Email Address</th>
 <th>Class</th>
 <th>Mobile Number</th>
 <th>Residential Address</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td><?php echo $id ; ?></td>
 <td><?php echo $name ; ?></td>
 <td><?php echo $fn ; ?></td>
 <td><?php echo $mn ; ?></td>
 <td><?php echo $email ; ?></td>
 <td><?php echo $cla ; ?></td>
 <td><?php echo $mob ; ?></td>
 <td><?php echo $add ; ?></td>
 </tr>
 </tbody>
 </table>
<a href="updates.php">UPDATE YOUR RECORDS HERE</a>
</body>