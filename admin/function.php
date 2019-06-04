<?php
session_start();
include '../dbconnection.php';

if (isset($_POST['loggin_admin'])) 
{
       $username=$_POST['username'];
	   $password=($_POST['password']);	

	   if ($username && $password) 
	   {
	   	  $query=$db->prepare("SELECT * FROM academician WHERE username='$username' AND password='$password' ");

	   	  $query->execute();

	   	  if ($query->fetchColumn()>0) 
	   	  {

	   	  	$_SESSION['username'] = $username;
	   	  	header('location:index.php');
	   	  } else {
	   	  	header('location:login.php?login=no');
	   	  }
	   }
	}

?>