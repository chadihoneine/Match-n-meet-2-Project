
    <?php
  $pass = $_POST["password"];
  $username = $_POST["username"];
    if( isset($username) && isset($pass) ) {
  require('dbconn.php'); //code is given below (used for database connection)
  $query =  "SELECT * FROM useraccounts WHERE username='$username' AND userpassword='$pass'";
  $ret=mysqli_query( $db, $query) or die("Could not execute query: " .mysqli_error($db));
  $row = mysqli_fetch_assoc($ret);
  if($row) {

     session_start();

	            $_SESSION['username']=$username ;
						  $_SESSION['userpassword']=$pass ;
                $_SESSION['userid']= $row['userid'];

							//echo"You are a validated user, logged in successfully.";
	            require("index.html");
  }
  else {
            ?>
			<script language='JavaScript'>alert('Invalid/Wrong Username or Password!');</script>
			<?php require("signin.php"); ?>
<?php
			}
                @mysqli_close($con);
	}

?>
