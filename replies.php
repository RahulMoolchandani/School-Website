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
$c=mysql_connect('localhost','root','');
if($c)
{
 mysql_select_db( 'rahul_db');
 if(isset($_POST['msg']))
  {
   $reply=$_POST['msg'];
   $id=$_POST['id'];
   $msg=$_POST['msg'];
   $query="UPDATE `message` SET `replies`='$reply' WHERE `id`='$id'";
   $quer_run=mysql_query( $query);
  }
 if(!empty($_GET['link']))
 {$s=$_GET['link'];
  $qq="SELECT `id`,`message`,`replies` FROM `message` WHERE `sender`='$s' ";
  $rr=mysql_query( $qq);
  while($rs=mysql_fetch_assoc($rr))
  {$id=$rs['id'];
   $m=$rs['message'];
   $rp=$rs['replies'];
   echo $s. "<br>id->" .$id . ":-" .$m . "<br> You: <br>"  . $rp . "<br><hr>";
  }
 } 
}
else echo 'error';
?>
<form action="replies.php" method="POST">
<h3>Reply:</h3><br>
<textarea name="msg" >
</textarea><br />
<h3>Against id</h3><br>
<input type="text" name="id"><br><br>
<input type="submit" value="submit it">
</form>