<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Store</title>
</head>
<body>
    <?php
    
        require_once ('../inc/adminNavigation.php');

        $upit = $pdo->prepare("SELECT * FROM kategorija");
        $upit->execute();
        $kategorije = $upit->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <div class="inputBox">
        <form action="addNewProduct.php" method="POST">
            <h3>Add a new guitar</h3>
            <input type="text" name="name" placeholder="Enter guitar name">
            <input type="number" name="price" placeholder="Enter price">
            <select name="kategorija" id="kategorija">
                <?php
                    foreach($kategorije as $kategorija){
                ?>
                <option value="<?php echo $kategorija['kategorija_id']?>"><?php echo $kategorija['ime']?></option>
                <?php
                    }
                ?>
            </select>
            <button type="submit" class="mainButton" name="addProduct">Add product on shop</button>
        </form>
    </div>

</body>
</html>