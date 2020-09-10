<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main</title>
</head>
<body>
<?php
session_start();
echo $_SESSION['email'];
?>
<p>Дезигна не будет, но вы держитесь</p>
<a style="margin-right: 30px" href="auth.html">Авторизация</a>
<a href="reg.html">Регистрация</a>
</body>
</html>