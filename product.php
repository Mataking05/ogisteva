<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guitar Store</title>
    <link rel="stylesheet" href="public/pc-style.css">
    <link rel="stylesheet" href="public/tablet-style.css">
    <link rel="stylesheet" href="public/landscape-mobile-style.css">
    <link rel="stylesheet" href="public/mobile-style.css">
    <link rel="stylesheet" href="public/nav.css">
</head>
<body>
    <?php
        require_once('inc/userNavigation.php');
        $idUser = $_SESSION['user_id'];

        $sql = "SELECT gitara.gitara_id, gitara.ime_gitare, gitara.cena, kategorija.ime
                FROM gitara
                LEFT JOIN kategorija on gitara.kategorija_id = kategorija.kategorija_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $gitare = $stmt -> fetchAll();

        foreach($gitare as $gitara){
    ?>
    <section>
        <img src="public/slike/background.jpg" alt="dasd"  width="100%" height="1000px"/>
    </section>
    <section class="products">
        <div class="product-box">
            <div class="guitar-id">
                <h3>Guitar ID</h3>
                <h3><?php echo $gitara['gitara_id']?></h3>
            </div>
            <div class="guitar-id">
                <h3>Guitar Name</h3>
                <h3><?php echo $gitara['ime_gitare']?></h3>
            </div>
            <div class="guitar-id">
                <h3>Guitar Price</h3>
                <h3><?php echo $gitara['cena']?></h3>
            </div>
            <div class="guitar-id">
                <h3>Guitar Type</h3>
                <h3><?php echo $gitara['ime']?></h3>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
</body>
</html>