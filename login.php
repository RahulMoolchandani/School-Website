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
.side {position:absolute;border-right:1px solid grey;height:300px;list-style-type: none;}
.fo {position:absolute;left:400px;}
</style>
</head>

<?php
$conn=mysql_connect('localhost','root','');
if($conn)
{
 mysql_select_db('rahul_db');
 if(isset($_POST['uname'])&&isset($_POST['pword']))
 {
  if(!empty($_POST['uname'])&&($_POST['pword']))
  {
   $username=$_POST['uname'];
   $password=$_POST['pword'];
   $pwords=md5($password);
   $query="SELECT `id` FROM login WHERE `username`='$username' AND `password`='$pwords'";
   $query_run=mysql_query($query);
   if(mysql_num_rows($query_run)!=NULL)
   {
    $user_id= mysql_result( $query_run,0,'id');
    $_SESSION['uid']=$user_id;
    header('Location:indexx.php');
    
   }
  }
 }
}
else echo 'ERROR';	
?>
<body>
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
<div class="fo">
<h1>Admin Login here</h1>
<form action="indexx.php" method="POST">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control"  name="uname">
  </div>
  <div class="form-group">
    <label for="pword">Password:</label>
    <input type="password" class="form-control"  name="pword">
  </div>
<input type="submit" value="submit">
</div>
</form>
</body>
</html>
