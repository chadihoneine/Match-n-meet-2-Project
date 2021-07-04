<?php
require('dbconn.php');
@session_start();
if(isset($_SESSION['userpassword'])&&isset($_SESSION['username'])&&isset($_SESSION['userid'])){

            header("Location: profile.php");
}
else{
echo"You have to be logged in";}
 ?>
