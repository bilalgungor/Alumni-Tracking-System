<?php  
include '../dbconnection.php'; 

 if(isset($_POST["id"]))  
 {  
 	  $id = $_POST['id'];
      $query =$db->prepare ("SELECT * FROM job_advert WHERE id = '$id'");  
      $query->execute();
      $row =$query->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($row);
 }  
 ?>