<?php
$gender = $_POST["gender"];
$harry = $_POST["harry"];
$outsideorindoor = $_POST["outsideorindoor"];
$tv = $_POST["tv"];
$iphone = $_POST["iphone"];
$dog = $_POST["dog"];
$netflix = $_POST["netflix"];
$phone = $_POST["phone"];
$dine = $_POST["dine"];
$chocolate = $_POST["chocolate"];
$day = $_POST["day"];
$fruits = $_POST["fruits"];
$mooney = $_POST["mooney"];
$mountains = $_POST["mountains"];
$warm = $_POST["warm"];
$basketball = $_POST["basketball"];
$spring = $_POST["spring"];
require('dbconn.php');
@session_start();
if(isset($_SESSION['userpassword'])&&isset($_SESSION['username'])&&isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
  $query = "INSERT INTO thisorthatquestions (userid, gender, harry, outsideorindoor, tv, iphone, dog, netflix, phone, dine, chocolate, day, fruits, mooney, mountains, warm, basketball, spring ) VALUES ('$userid','$gender', '$harry', '$outsideorindoor', '$tv', '$iphone', '$dog','$netflix','$phone','$dine','$chocolate','$day','$fruits','$mooney','$mountains','$warm','$basketball','$spring')";
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
