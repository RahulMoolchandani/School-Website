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

.side {position:absolute;border-right:1px solid grey;height:1000px;list-style-type: none;}
.fo {position:absolute;left:400px;}
</style>
</head>
<body>
<?php
        include 'include.php';
        ?>
<div class="side">
<ul>
<li><a href="instructions.php">Instructions for deposition of fees</a></li>
<li><a href="thought.php">Thought for the students</a></li>
<li><a href="pics.php">Picture gallery</a></li>
<li><a href="event.php">Upcoming Events</a></li>
</ul>
</div>
</body>
</html>
<?php
$conn=mysql_connect('localhost','root','');
if($conn)
{
 mysql_select_db( 'rahul_db');
 if(isset($_POST['user'])&& isset($_POST['pword']))
 {
  if(!empty($_POST['user'])&& !empty($_POST['pword']))
  {
   $user=$_POST['user'];
   $pass=$_POST['pword'];
   $passhash=md5($pass);
   $quer="SELECT `id`,`user` FROM `stulog` WHERE `user`='$user' AND `password`='$passhash' ";
   $run=mysql_query( $quer);
   if(mysql_num_rows($run)!= NULL)
   {
    $user_id=mysql_result( $run,0,'id');
    $user_name=mysql_result( $run,0,'user');
    $_SESSION['user_id']=$user_id;
    $_SESSION['user_name']=$user_name;
    header('Location:stuindex.php');
   }
  }
 }
} 
?>
<div class="fo">
<h1>Login Here</h1><br><br>
<form action="stuindex.php" method="POST">
username<input type="text" name="user" /><br/><br/>
password<input type="password" name="pword"><br /><br />
<input type="submit" value="submit" >
</form></div>