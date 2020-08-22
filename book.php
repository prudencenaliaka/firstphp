<?php
$username = $_POST['username'];
$tel = $_POST['tel'];
$route = $_POST['route'];
$message = $_POST['message'];
if(!empty($username) || !empty($tel) || !empty($route) || !empty($message)){
$servername = 'localhost';
$dBUsername = 'root';
$dBPassword = 'nalika*1';
$dBName = 'BookNow';
$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
}
else {
  echo"Please fill the empty fields";
  header("location: ../firstphp/bookNow.php?erroremptyfieldsusername.".$username."&route".$route."&message".$message."&tel".$tel);
  exit();
}
if(!$conn){
die("connection failed".mysqli_connect_error());
}
else {
    $sql = "INSERT INTO book (username,tel,route,message) values ('[$username]',$tel,'[$route]','[$message]')";
    if($conn->query($sql)=== TRUE){
      header("location: ../firstphp/index.html?succsessfulyregistered");
      exit();
    }
    else{
      echo "Error: " . $sql . "<br>" . $conn->error;
      header("location: ../firstphp/bookNow.php?succsessfulyregistered");
      exit();
    }}
?>
