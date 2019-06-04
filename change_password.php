<?php
ob_start();
session_start();
include 'dbconnection.php';
if (!isset($_SESSION['student_id'])) 
{
  header('Location:login.php');
}



if (isset($_POST['updatePasswd'])) {
  $student_id=$_SESSION['student_id'];
  $cpassword=$_POST['cpassword'];
  $validate_password=$_POST['validate_password'];
  $validate_password1=$_POST['validate_password1'];
   if (isset($_SESSION['student_id'])) {
  $student_id=$_SESSION['student_id'];
  $stmt = $db->query("SELECT * FROM student WHERE student_id='$student_id' ");
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

      $q= $db->query("UPDATE student SET password='$validate_password1' WHERE student_id='$student_id'",PDO::FETCH_ASSOC);

      if ($q) {
        header('Location:profile.php');
        $_SESSION['success']="Şifreniz Başarılı Bir Şekilde Değiştirldi";
      }
    }
   

  } 

}


?>