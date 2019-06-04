<?php
	include '../dbconnection.php';
	include 'profile_update.php';

	    if(isset($_POST['delete_button'])){
		$id=$_POST['id'];
		$stmt = $db->query("DELETE FROM job_advert WHERE id = '$id'");
		
	header('location: myadvert.php');
}

  if(isset($_POST['all_delete_button'])){
		$id=$_POST['id'];
		$stmt = $db->query("DELETE FROM job_advert WHERE id = '$id'");
		
	header('location: advert.php');
}
	
?>