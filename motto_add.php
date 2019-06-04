<?php
session_start();
include 'dbconnection.php';
include 'profile_update.php';



if(isset($_POST['motto_button'])){
	$student_id=$_SESSION['student_id'];
	$motto = $_POST['motto'];
	$status = 1;


	$query = $db->query("INSERT INTO motto (student_id, first_name, last_name, motto, motto_photo, department, status) VALUES ( '$student_id', '$first_name', '$last_name', '$motto' ,'$photo', '$department', '$status')"); 

	if ($query) {
		$_SESSION['success']="Mesajınız onaylandıktan sonra yayınlanacaktır!";
		header('Location:index.php');
	}
	else{
			$_SESSION['error']="Hata!!";
			header('Location:index.php');
		}
	
}

?>