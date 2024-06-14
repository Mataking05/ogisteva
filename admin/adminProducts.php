<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/adminProduct.css">
    <title>Guitar Store</title>
</head>
<body>
    <?php

    require_once ('../inc/adminNavigation.php');

    ?>


    <div class="new">
        <button class="btn"><a href="addProduct.php">Add new guitar</a></button>
    </div>

    <?php
        $sql = "SELECT gitara.gitara_id, gitara.ime_gitare, gitara.cena, kategorija.ime
                FROM gitara
                LEFT JOIN kategorija on gitara.kategorija_id = kategorija.kategorija_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $gitare = $stmt -> fetchAll();

        foreach($gitare as $gitara){
    ?>

    <div class="product-box">
        <div class="guitarId">
            <h3>Guitar ID</h3>
            <h3 class="dinamicItem"><?php echo $gitara['gitara_id']?></h3>
        </div>
        <div class="guitarName">
            <h3>Guitar Name</h3>
            <h3 class="dinamicItem"><?php echo $gitara['ime_gitare']?></h3>
        </div>
        <div class="guitarPrice">
            <h3>Guitar Price</h3>
            <h3 class="dinamicItem"><?php echo $gitara['cena']?></h3>
        </div>
        <div class="guitarProducer">
            <h3>Guitar Type</h3>
            <h3 class="dinamicItem"><?php echo $gitara['ime']?></h3>
        </div>
        <div class="buttons">
            <button class="edit"><a href="editProduct.php?gitara_id=<?php echo $gitara['gitara_id'] ?>"> Edit</a></button>
            <button class="delete"><a href="deleteProduct.php?gitara_id=<?php echo $gitara['gitara_id'] ?>"">Delete</a></button>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>
