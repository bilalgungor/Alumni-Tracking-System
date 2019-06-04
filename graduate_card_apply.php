<?php
session_start();
include 'dbconnection.php';
include 'profile_update.php';
if (!isset($_SESSION['student_id'])) 
  {
      header('Location:login.php');
  }


  if(isset($_POST['apply'])){
    $student_id=$_SESSION['student_id'];
    $status=1;

    $query = $db->query("INSERT INTO graduate_card (student_id, first_name, last_name, department, photo, graduate_date, status) VALUES ( '$student_id', '$first_name', '$last_name', '$department', '$photo', '$graduate_date', '$status')"); 

   if ($query) {
    $_SESSION['advert_success']="Öğrenci başarılı bir şekilde yayınlandı!";
     header('Location:graduate_card.php');
  }
  else{
      $_SESSION['advert_error']="Hata!!";
      header('Location:graduate_card.php');
    } 
}
  ?>