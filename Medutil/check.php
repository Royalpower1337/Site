<?php 
$name = filter_var(trim($_POST['Client_Passport_main']));
$adress = filter_var(trim($_POST['Client_Passport_adress']));
$licence = filter_var(trim($_POST['Client_Driving_licence']));
$number = filter_var(trim($_POST['Client_Number']));
$age = filter_var(trim($_POST['Client_age']));
$drivexp = filter_var(trim($_POST['Client_drivingEXP']));
$login = filter_var(trim($_POST['Client_login'])); // Удаляет все лишнее и записываем значение в переменную //$login
$pass = filter_var(trim($_POST['Client_password']));


$pass = md5($pass."thisisforhabr"); // Создаем хэш из пароля

$mysql = new mysqli('localhost', 'root', '', 'Medutil');

$result1 = $mysql->query("SELECT * FROM `client` WHERE `Client_login` = '$login'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив

$mysql->query("INSERT INTO `client`( `Client_Passport_main`, `Client_Passport_adress`, `Client_Driving_licence`, `Client_Number`, `Client_age`, `Client_drivingEXP`, `Client_login`, `Client_password`) VALUES ('$name','$adress','$licence','$number','$age','$drivexp','$login','$pass')");
$mysql->close();

if (isset($_POST["upload"])){
    $img_type = substr($_FILES['img']['type'],0,5);
    if(!empty($_FILES['img']['tmp_name']) and $img_type == 'image' and $_FILES['img']['type'] == "image/jpeg"){
        $img = file_get_contents($_FILES['img']['tmp_name']);
        $name = randomString();
        $mysql->query("INSERT INTO `client`( `Client_Passport_main`, `Client_Passport_adress`, `Client_Driving_licence`, `Client_Number`, `Client_age`, `Client_drivingEXP`, `Client_login`, `Client_password`) VALUES ('$name','$adress','$licence','$number','$age','$drivexp','$login','$pass')");
$mysql->close();
    }
}

header('Location: /');
exit();
 ?>
