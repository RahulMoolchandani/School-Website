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
.s {position:absolute;left:100px;}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid">

            

            <!-- Menu Items -->
            <div>
                

                <!--right align -->
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="logout.php">Logout</a></li>
                  
                   
                </ul>

            </div>

        </div>
    </nav>
</body>
</html>
<?php
if(mysql_connect('localhost','root',''))
{
 mysql_select_db('rahul_db');
 $quer="SELECT `user` FROM `stulog` ";
 $r=mysql_query( $quer);
 while($rows=mysql_fetch_assoc($r))
 {
  $sends=$rows['user'];
  echo '<div class="s"><a href="replies.php?link=' . $sends . '">' . $sends . '</a></div><br >';
 }
}
?>