<?php
include 'dbconnection.php';


if (isset($_SESSION['student_id'])) {
  $student_id=$_SESSION['student_id'];
  $stmt = $db->query("SELECT *FROM student WHERE student_id='$student_id' ");
  while ($row = $stmt->fetch()) {
    $first_name= $row['first_name'];
    $last_name = $row['last_name'];
    $faculty = $row['faculty'];
    $department = $row['department'];
    $firm = $row['firm'];
    $position = $row['position'];
    $email = $row['email'];
    $phone_number = $row['phone_number'];
    $graduate_date = $row['graduate_date'];
    $password= $row['password'];
    $photo = $row['photo'];

  }
}
if(isset($_POST['save'])){

  $student_id=$_SESSION['student_id'];
  $firm =$_POST["firm"];
  $position =$_POST["position"];
  $email=$_POST["email"];
  $phone_number=$_POST["phone_number"];

   $query = $db->query("UPDATE student SET firm='$firm', position='$position', email='$email', phone_number='$phone_number' WHERE student_id='$student_id' ",PDO::FETCH_ASSOC);

  if ($_FILES["photo"]["type"]=="image/jpeg") {
      $resimadi=$_FILES["photo"]["name"];
     $resim = explode(".", $resimadi);
     $uzantsi=$resim[1];
     $yeni=md5($resim[0]);
     $yeniad="uploads/".$yeni.".".$uzantsi;
     if (move_uploaded_file($_FILES["photo"]["tmp_name"],$yeniad)) {
       $query = $db->query("UPDATE student SET photo='$yeniad' WHERE student_id='$student_id' ",PDO::FETCH_ASSOC);
       $query->execute(array($yeniad));
     }
  }
}

?>