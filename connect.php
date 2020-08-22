<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$passwordRepeat = $_POST['passwordRepeat'];
  if(!empty($username) || !empty($email) || !empty($password) || !empty($passwordRepeat)){
    $servername = 'localhost';
    $dBUsername = 'root';
    $dBPassword = 'nalika*1';
    $dBName = 'signup';
    $conn =mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
  }
  else {
    header("location: ../firstphp/signup.html?erroremptyfieldsusername.".$username."&email".$email."&password".$password."&passwordRepeat".$passwordRepeat);
    echo"Please fill the empty fields";
    exit();
  }
    if(!$conn){
    die("connection failed".mysqli_connect_error());
    }
    else {
        $sql = "INSERT INTO users (username,email,password,passwordRepeat) values ('[$username]','[$email]','[$password]','[$passwordRepeat]')";
        if($conn->query($sql)=== TRUE){
      //echo"<script>alert("Insert was succsessfuly recorded")</script>;"
          header("location: ../firstphp/index.html?succsessfulyrecorded");
          exit();
        }
        else{
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if($password !== ($passwordRepeat)){
          header("location: ../firstphp/signup.html?errorpasswordcheckusername.".$username."&email".$email);
          exit();
        }
        else if (!filter_var($email , FILTER_VALIDATE_EMAIL)&& !preg_match("/^(a-ZA-ZO-Z9)*$/", $username)) {
          header("location: ../firstphp/signup.html?errorinvalidemailusername.");
          exit();
        }
        else if (!filter_var($email , FILTER_VALIDATE_EMAIL)){
            header("location: ../firstphp/signup.html?errorinvalidemailusername.");
            exit();
        }
        else if(!preg_match("/^(a-ZA-ZO-Z9)*$/", $username)) {
          header("location: ../firstphp/signup.html?errorinvalidemailusername.");
          exit();
        }
        else {
          $sql="SELECT username FROM users WHERE username=?";
          $stmt= mysqli_stmt_init($conn);
          if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../firstphp/signup.html?=errorsqlerror");
            exit();
          }
        }
        $conn->close();
}

?>
