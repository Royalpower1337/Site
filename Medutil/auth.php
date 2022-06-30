<?php 

$login = filter_var(trim($_POST['Client_login']));
$pass = filter_var(trim($_POST['Client_password']));

$pass = md5($pass."forhktkntuhpi"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'root', '', 'medutil');


$result = $mysql->query("SELECT * FROM `client` WHERE `Client_login` = '$login' AND `Client_password` = '$pass'");
$user = $result->fetch_assoc(); // Конвертируем в массив


setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: page.html');

 ?>