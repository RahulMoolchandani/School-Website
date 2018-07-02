<?php
require 'coree.php';
if(isset($_SESSION['uid'])&&!empty($_SESSION['uid']))
{
 header('Location:a.php');
}
else
include 'login.php';
?>