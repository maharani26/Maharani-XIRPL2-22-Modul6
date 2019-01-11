<?php
session_start();
include '../connect.php';

$nis = $_POST['nis'];
$password = $_POST['password'];

if ($nis == "" || $password == "")
{
   header("location: form-login.php");
}

else
  {
  $query = "SELECT * FROM user WHERE username = '$nis' AND password ='$password'";
  $result = mysqli_query($connect, $query);

  $num = mysqli_num_rows($result);
  if ($num == 1)
  {
header ("location: // ");
$_SESSION['nis'] = $nis;
}
else {
  header ("location: form-login.php");
}
}
 ?>
