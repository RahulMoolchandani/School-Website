<?php
require 'coree.php';
if(isset($_SESSION['user_id'])&& !empty($_SESSION['user_id']))
{
 header('Location:notice.php');

}
else include 'students.php';
?>