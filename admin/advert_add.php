<?php
session_start();
include '../dbconnection.php';
include 'profile_update.php';
include '../timezone.php';
if (!isset($_SESSION['username'])) 
  {
      header('Location:login.php');
  }


  if(isset($_POST['add'])){
    $username=$_SESSION['username'];
    $position = $_POST['position'];
    $title = $_POST['title'];
    $company = $_POST['company'];
    $contact = $_POST['contact'];
    
   

    $query = $db->query("INSERT INTO job_advert (username, first_name, last_name, contact, company, job_definition, position, ad_date) VALUES ( '$username', '$first_name', '$last_name', '$contact', '$company', '$title', '$position', '$date')"); 

    if ($query) {
    $_SESSION['advert_success']="İlan başarılı bir şekilde yayınlandı!";
     header('Location:myadvert.php');
  }
  else{
      $_SESSION['advert_error']="Hata!";
      header('Location:myadvert.php');
    } 
   
}
  ?>