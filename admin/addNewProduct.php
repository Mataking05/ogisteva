<?php 

    include '../app/config/config.php';

    $gitaraIme = $_POST['name'];
    $cena = $_POST['price'];
    $kategorija = $_POST['kategorija'];

    $upit = "INSERT INTO gitara (kategorija_id, ime_gitare, cena)
                         VALUES (:kategorija, :gitaraIme, :cena)";
    $stmt = $pdo -> prepare($upit);
    $stmt -> bindParam(':kategorija', $kategorija);
    $stmt -> bindParam(':gitaraIme', $gitaraIme);
    $stmt -> bindParam(':cena', $cena);
    $stmt -> execute();

    header("Location: adminProducts.php");
?>
