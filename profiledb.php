
    <?php
  $pass = $_POST["password"];
  $username = $_POST["username"];
  require('dbconn.php');
    if( isset($username) && isset($pass) ) {
//code is given below (used for database connection)
  $query =  "SELECT * FROM useraccounts WHERE username='$username' AND userpassword='$pass'";
  $ret=mysqli_query( $db, $query) or die("Could not execute query: " .mysqli_error($db));
  $row = mysqli_fetch_assoc($ret);
  if($row) {



	            $_SESSION['username']=$username ;
						  $_SESSION['userpassword']=$pass ;
                $_SESSION['userid']= $row['userid'];


}
//$useremail = mysqli_query("SELECT useremail FROM useraccouts WHERE username='$username'");
$query2 = "SELECT useremail FROM useraccounts WHERE username='$username' AND userpassword='$pass'";
$result = mysqli_query($db,$query2) or die("Could not execute query: " .mysqli_error($db));
$row = mysqli_fetch_assoc($result);
   $useremail = $row["useremail"];

   $query3 = "SELECT userfname FROM useraccounts WHERE username='$username' AND userpassword='$pass'";
   $result2 = mysqli_query($db,$query3) or die("Could not execute query: " .mysqli_error($db));
   $row2 = mysqli_fetch_assoc($result2);
      $userfname = $row2["userfname"];

      $query4 = "SELECT userlname FROM useraccounts WHERE username='$username' AND userpassword='$pass'";
      $result3 = mysqli_query($db,$query4) or die("Could not execute query: " .mysqli_error($db));
      $row3 = mysqli_fetch_assoc($result3);
         $userlname = $row3["userlname"];
              //  $fetchuseremail="SELECT useremail FROM useraccouts WHERE username='$username'";

            //    $result = mysqli_query($db,$fetchuseremail);
              //   $row = mysqli_fetch_array($result);
                //$useremail=$row["useremail"];
                //$_SESSION['useremail']=$email
                //$_SESSION['userid']=
                //$_SESSION['userid']=

							//echo"You are a validated user, logged in successfully.";
}
require('profile.php');
                @mysqli_close($con);


?>
