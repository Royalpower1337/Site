<?php
    global $pdo;

    $db_host = "localhost";
    $db_name = "medutil";
    $db_user = "root";
    $db_psw = "";
    $charset = "utf8";

    $pdo = new PDO( 
        "mysql:host=$db_host;
        dbname=$db_name;
        charset=$charset",
        $db_user,
        $db_psw
    );