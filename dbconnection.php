<?php

    $ip = "localhost"; 
	$user = "root"; 
	$password = "12345678"; 
	$db = "aybumbs"; 
	
	
	try{
		$db = new PDO("mysql:host=$ip;dbname=$db",$user,$password);
	
		$db->exec("SET CHARSET UTF8");
		
	}catch(PDOException $e){
		die ("Hata var");
	}
?>