<?php
$friend = $_POST["friend"];
$imagination = $_POST["imagination"];
$parties = $_POST["parties"];
$routine = $_POST["routine"];
$problems = $_POST["problems"];
$eat = $_POST["eat"];
$attention = $_POST["attention"];
$oorder = $_POST["oorder"];
$music = $_POST["music"];
$feel = $_POST["feel"];
$places = $_POST["places"];
$challenging = $_POST["challenging"];
$ggroup = $_POST["ggroup"];
$cooperation = $_POST["cooperation"];
require('dbconn.php');
@session_start();
if(isset($_SESSION['userpassword'])&&isset($_SESSION['username'])&&isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
  $query = "INSERT INTO agreeordisagreequestions (userid, friend, imagination, parties, routine, problems, eat, attention, oorder, music, feel, places, challenging, ggroup, cooperation ) VALUES ('$userid', '$friend', '$imagination','$routine', '$problems', '$eat', '$trust','$attention', '$oorder', '$music', '$feel', '$places', '$challenging','$ggroup', '$cooperation' )";
  $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
  if(!$result) {
echo "error";
  }
  else {
            header("Location: questions.php");
  }
}
else{echo"You have to be logged in";}
?>
