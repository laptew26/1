<?php

require_once 'db.php';

$email=$_POST['email'];
$phone=$_POST['phone'];
$pass= md5($_POST['pass']);

$stmt= $pdo->query('INSERT INTO `users`(`email`, `phone`, `pass`) VALUES ("'.$email.'",
                                                                          "'.$phone.'",
                                                                          "'.$pass.'")');
/*var_dump($pdo->errorInfo());*/

include "index.php";

?>