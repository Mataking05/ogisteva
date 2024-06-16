<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Store</title>
</head>
<body>
    <?php
    
        require_once('../inc/adminNavigation.php');

        $upit = $pdo->prepare("SELECT * FROM kategorija");
        $upit->execute();
        $kategorije = $upit->fetchAll(PDO::FETCH_ASSOC);

        $gitaraID = $_GET['gitara_id'];
        $sql ="SELECT * FROM gitara WHERE gitara_id = :gitaraID";
        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam(':gitaraID', $gitaraID);
        $stmt -> execute();

        $gitaraForEdit = $stmt -> fetch(PDO::FETCH_ASSOC);

    ?>

    <div class="inputBox">
        <form action="updateProduct.php" method="POST">
            <h3>Edit product</h3>
            <input type="text" name="gitara_id" hidden value="<?php echo $gitaraID?>">
            <input type="text" name="name" value="<?php echo $gitaraForEdit['ime_gitare']?>">
            <input type="text" name="cena" value="<?php echo $gitaraForEdit['cena']?>">
            <select name="kategorija" id="kategorija">
                <?php
                    foreach($kategorije as $kategorija){
                        $selected = "";
                        if($kategorija['kategorija_id'] == $gitaraForEdit['kategorija_id']){
                            $selected = "selected";
                        }
                ?>
                <option <?php echo $selected?> value="<?php echo $kategorija['kategorija_id'] ?>"><?php echo $kategorija['ime']?></option>
                <?php
                    }
                ?>
            </select>
            <button type="submit" class="mainButton" name="addProduct">Edit Product</button>
        </form>
    </div>

</body>
</html>