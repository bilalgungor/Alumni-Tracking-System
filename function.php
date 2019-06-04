<?php
session_start();
include 'dbconnection.php';

if (isset($_POST['loggin'])) 
{
       $student_id=$_POST['student_id'];
	   $password=($_POST['password']);	

	   if ($student_id && $password) 
	   {
	   	  $query=$db->prepare("SELECT * FROM student WHERE student_id='$student_id' AND password='$password' ");

	   	  $query->execute();

	   	  if ($query->fetchColumn()>0) 
	   	  {

	   	  	$_SESSION['student_id'] = $student_id;
	   	  	header('location:index.php');
	   	  } else {
	   	  	header('location:login.php?login=no');
	   	  }
	   }
	}

?>