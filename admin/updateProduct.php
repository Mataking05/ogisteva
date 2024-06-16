<?php 
    include '../app/config/config.php';

    $gitaraID = $_POST['gitara_id'];
    $name = $_POST['name'];
    $price = $_POST['cena'];
    $kategorija = $_POST['kategorija'];

    $sql = "UPDATE gitara SET kategorija_id = :kategorija, cena = :price, ime_gitare = :name WHERE gitara_id = :gitaraID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':kategorija', $kategorija);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':gitaraID', $gitaraID);
    $stmt->execute();

    header("Location: adminProducts.php");
?>