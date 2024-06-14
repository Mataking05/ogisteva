<?php 
    include '../app/config/config.php';

    $gitaraID = $_GET['gitara_id'];
    $sql = "DELETE FROM gitara WHERE gitara_id = :gitaraID";

    $stmt = $pdo -> prepare($sql);
    $stmt = $pdo->prepare($sql);
    $stmt -> bindParam(':gitaraID', $gitaraID);
    $stmt -> execute();

    header("Location: adminProducts.php");
?>