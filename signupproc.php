
    <?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    require('dbconn.php');

    $sql_u="SELECT  * FROM useraccounts WHERE username='$username'";
    $sql_e="SELECT  * FROM useraccounts WHERE useremail='$email'";
    $res_u= mysqli_query($db,$sql_u) or die  (mysqli_error($db));
    $res_e= mysqli_query($db,$sql_e) or die  (mysqli_error($db));

    if(mysqli_num_rows($res_u)>0){
      echo "Username already taken";
    }
    else if(mysqli_num_rows($res_e)>0){
      echo "Email already taken";
    }
    else{
      $query = "INSERT INTO useraccounts (userfname, userlname,username, useremail, userpassword) VALUES ('$fname', '$lname','$username','$email', '$password')";
      $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
      if(!$result) {
        header("Location: http://localhost/Match-n-meet%202%20Project/login.html");
      }
      else {
                header("Location: http://localhost/Match-n-meet%202%20Project/index.html");
      }
    }


    ?>
