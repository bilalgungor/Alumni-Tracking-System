<?php
include '../dbconnection.php';


if (isset($_SESSION['username'])) {
  $username=$_SESSION['username'];
  $stmt = $db->query("SELECT * FROM academician WHERE username='$username' ");
  while ($row = $stmt->fetch()) {
    $first_name= $row['first_name'];
    $last_name = $row['last_name'];
    $faculty = $row['faculty'];
    $department = $row['department'];
    $email = $row['email'];
    $password= $row['password'];
    $photo = $row['photo'];

  }
}
if(isset($_POST['save_profile'])){

  $username=$_SESSION['username'];
  $first_name= $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email=$_POST["email"];

   $query = $db->query("UPDATE academician SET first_name='$first_name', last_name='$last_name', email='$email' WHERE username='$username' ",PDO::FETCH_ASSOC);

  if ($_FILES["photo"]["type"]=="image/jpeg") {
      $resimadi=$_FILES["photo"]["name"];
     $resim = explode(".", $resimadi);
     $uzantsi=$resim[1];
     $yeni=md5($resim[0]);
     $yeniad="../uploads/".$yeni.".".$uzantsi;
     if (move_uploaded_file($_FILES["photo"]["tmp_name"],$yeniad)) {
       $query = $db->query("UPDATE academician SET photo='$yeniad' WHERE username='$username' ",PDO::FETCH_ASSOC);
       $query->execute(array($yeniad));
     }
  }
}

?>