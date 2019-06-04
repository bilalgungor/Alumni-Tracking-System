<?php
include '../dbconnection.php';

if(isset($_POST['update'])){

  $id =$_POST["id"]; 
  $position =$_POST["position"];
  $company =$_POST["company"];
  $contact=$_POST["contact"];
  $title=$_POST["title"];

   $query = $db->query("UPDATE job_advert SET  position='$position', company='$company', contact='$contact', job_definition='$title' WHERE id='$id' ",PDO::FETCH_ASSOC);
   header('location: myadvert.php');
 }

?>