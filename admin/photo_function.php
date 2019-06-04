<?php
	include '../dbconnection.php';
	    if(isset($_POST['button_photo'])){
		$id=$_POST['id'];
		$status=1;
		$stmt = $db->query("UPDATE gallery SET status='$status' WHERE id = '$id'");
		header('location: check_photo.php');
}	

 if(isset($_POST['button_delete_photo'])){
		$id=$_POST['id'];
		$stmt = $db->query("DELETE FROM gallery WHERE id = '$id'");
		header('location: check_photo.php');
}	