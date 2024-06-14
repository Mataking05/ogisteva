<?php

    include 'app/config/config.php';

    $imePrezime = $_POST['name'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $idUloge = 2;
    $aktivan = 0;

    $sql = "INSERT INTO user (name, uloga_id, username, email, password_hash, is_active)
                        VALUES (:imePrezime, :idUloge, :userName, :email, :password, :aktivan)";

    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(':imePrezime', $imePrezime);
    $stmt -> bindParam(':idUloge', $idUloge);
    $stmt -> bindParam(':userName', $userName);
    $stmt -> bindParam(':email', $email);
    $stmt -> bindParam(':password', $password);
    $stmt -> bindParam(':aktivan', $aktivan);

    $stmt -> execute();

    header("Location: login.php?registracija=1");


?>