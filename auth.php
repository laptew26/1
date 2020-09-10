<?php 

require_once('db.php');

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$email_query = $pdo->query('SELECT * FROM users WHERE email="'. $email .'" ');
	if (!$email_query) {
		echo "test";
	} else {
		foreach ($email_query as $row) {
		   if (md5($pass) == $row['pass']) {
		   	session_start();
		   	$_SESSION['email'] = $row['email'];
				header('Location:http://localhost/LaptewErmakoV/1/index.php') ;
		   }
		   else {
		   		echo "Иди своей дорогой сталкер";
		   }
		}
	}
  



?>