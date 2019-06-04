<?php
	include '../dbconnection.php';
	    if(isset($_POST['confirm_button'])){
		$id=$_POST['id'];
		$status=0;
		$stmt = $db->query("UPDATE graduate_card SET status='$status' WHERE id = '$id'");
		
	header('location: graduate_card.php');
}
	
?>