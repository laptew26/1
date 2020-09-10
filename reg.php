<?php

require_once 'db.php';

$email=$_POST['email'];
$phone=$_POST['phone'];
$pass= md5($_POST['pass']."sjwsffr241");

$stmt= $pdo->query('INSERT INTO `users`(`email`, `phone`, `pass`) VALUES ("'.$email.'",
                                                                          "'.$phone.'",
                                                                          "'.$pass.'")');
/*var_dump($pdo->errorInfo());*/

include "index.html";

?>