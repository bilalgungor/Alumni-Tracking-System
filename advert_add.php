<?php
session_start();
include 'dbconnection.php';
include 'profile_update.php';
include 'timezone.php';
if (!isset($_SESSION['student_id'])) 
  {
      header('Location:login.php');
  }


  if(isset($_POST['add'])){
    $student_id=$_SESSION['student_id'];
    $position = $_POST['position'];
    $title = $_POST['title'];
    $company = $_POST['company'];
    $contact = $_POST['contact'];
    
   

    $query = $db->query("INSERT INTO job_advert (student_id, first_name, last_name, contact, company, job_definition, position, ad_date) VALUES ( '$student_id', '$first_name', '$last_name', '$contact', '$company', '$title', '$position', '$date')"); 

    if ($query) {
    $_SESSION['advert_success']="İlan başarılı bir şekilde yayınlandı!";
     header('Location:myadvert.php');
  }
  else{
      $_SESSION['advert_error']="Hata!!";
      header('Location:myadvert.php');
    } 
   
}
  ?>