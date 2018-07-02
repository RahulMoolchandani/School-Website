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
.sent {color:black;background-color:blue;}
.reply {color:white;background-color:black;}
</style>
</head>
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
<?php
$sent="";
$time=date(' D M Y' , time());
include 'coree.php';
$a=$_SESSION['user_name'];
$c=mysql_connect('localhost','root','');
if($c)
{
 mysql_select_db('rahul_db');
 {
  $q="SELECT DISTINCT `message`,`replies` FROM `message` WHERE `sender`='$a'";
  $r=mysql_query($q);
  while($rows=mysql_fetch_assoc($r))
  {if($sent!=$rows['message'])
   {
    $sent=$rows['message'];
    $reply=$rows['replies'];
    
    echo 'You: <br><div class="sent">' . $sent . '</div><br><br>' . 'Admin: <br>' . $reply . '<br> <hr>';
   }
  }
  if(isset($_POST['msg']))
  {
   
   $msg=htmlentities($_POST['msg']);
   $query="INSERT INTO `message`(`id`,`sender`,`message`,`replies`) VALUES('','$a','$msg','')";
   $quer_run=mysql_query( $query);
   
  }
 }
}
else echo 'error';
?>

<form action="message.php" method="POST">
<textarea name="msg" >
</textarea>
<input type="submit" value="submit it">
</form>