<?php
ob_start();
session_start();
include '../dbconnection.php';
if (!isset($_SESSION['username'])) 
{
  header('Location:login.php');
}



if (isset($_POST['updatePasswd'])) {
  $username=$_SESSION['username'];
  $cpassword=$_POST['cpassword'];
  $validate_password=$_POST['validate_password'];
  $validate_password1=$_POST['validate_password1'];
   if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
  $stmt = $db->query("SELECT * FROM academician WHERE username='$username' ");
  while ($row = $stmt->fetch()) {
    $password= $row['password'];
     if ($cpassword!=$password) {
 $_SESSION['error_password']="Mevcut Şifre Hatalı!";
  header('Location:profile.php');
    }

  }
}


  if ($password==$cpassword) {

    if ($validate_password==$validate_password1) {

      $q= $db->query("UPDATE academician SET password='$validate_password1' WHERE username='$username'",PDO::FETCH_ASSOC);

      if ($q) {
        header('Location:profile.php');
        $_SESSION['success']="Şifreniz Başarılı Bir Şekilde Değiştirldi";
      }
    }
   

  } 

}


?>