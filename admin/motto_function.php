<?php
	include '../dbconnection.php';
	    if(isset($_POST['button_motto'])){
		$id=$_POST['id'];
		$status=0;
		$stmt = $db->query("UPDATE motto SET status='$status' WHERE id = '$id'");
		header('location: check_motto.php');
}	

 if(isset($_POST['delete_motto'])){
		$id=$_POST['id'];
		$stmt = $db->query("DELETE FROM motto WHERE id = '$id'");
		header('location: check_motto.php');
}	
?>