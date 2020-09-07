<?php

require_once 'db.php';

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $email_query = $pdo->query('SELECT * FROM users WHERE email="'. $email .'"');
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    print_r($result);
    print("\n");
    if (!$email_query) {
        echo "Добро пожаловать(нет)";
    }
    else{
        echo "Иди своей дорогой сталкер";
    }

    var_dump($email_query);
?>