<?php 

require_once('db.php');

$type = $_GET['type'];

	$email = $_POST["email-l"];
	$pass = $_POST["pass-l"];

	$email_query = $pdo->query('SELECT * FROM users WHERE email="'. $email .'" ');
	if (!$email_query) {
		echo "yess";
	} else {
		foreach ($email_query as $row) {
		   if (md5($pass) == $row['password']) {
		   		setcookie("login", $email, time() + 50000);
				setcookie("pass", md5($pass), time() + 50000);
				include "index.html";
		   }
		   else {
		   		include "index.html";
		   }
		}
	}
  



?>
