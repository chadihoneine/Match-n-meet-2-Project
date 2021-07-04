<?php

require('dbconn.php'); //code is given below (used for database connection)
if(isset($_SESSION['userpassword'])&&isset($_SESSION['username'])&&isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
$query =  "DELETE FROM profilepagetext1 WHERE userid=$_SESSION[userid]";
$ret=mysqli_query( $db, $query) or die("Could not execute query: " .mysqli_error($db));
//$row = mysqli_fetch_assoc($ret);

$userjob= $_POST["job"];
$userliving= $_POST["residence"];
$userbirthday= $_POST["birthday"];

$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

$query2 = "INSERT INTO profilepagetext1 (userid, username, userjob, userliving, userbirthday) VALUES ('$userid', '$username','$userjob','$userliving','$userbirthday')";
$result = mysqli_query($db, $query2) or die ("Couldnt execute query.");
if(!$result) {
echo "error";
}
else {
          header("Location: profile.php");
}
}
  
        ?>
