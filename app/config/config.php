<?php 
    $server = "localhost";
    $dataBaseName = "shop";
    $username = "root";
    $password = "";

    $pdo = new PDO( "mysql:host=$server;dbname=$dataBaseName", $username, $password );

    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>