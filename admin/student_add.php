<?php
include '../dbconnection.php';


  if(isset($_POST['add'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $student_id = $_POST['student_id'];
    $password = $_POST['password'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $graduate_date = $_POST['graduate_date'];
   

    $query = $db->query("INSERT INTO student (student_id, first_name, last_name, faculty, department, graduate_date, password) VALUES ( '$student_id', '$first_name', '$last_name', '$faculty', '$department', '$graduate_date', '$password')"); 

    if ($query) {
    $_SESSION['advert_success']="Öğrenci başarılı bir şekilde yayınlandı!";
     header('Location:student.php');
  }
  else{
      $_SESSION['advert_error']="Hata!!";
      header('Location:student.php');
    } 
   
}
  ?>