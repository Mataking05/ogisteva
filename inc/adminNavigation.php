<?php

    include '../app/config/config.php';
    include '../app/config/sessionChecker.php';
        
    $korisnik = $_SESSION['name'];
    $idUser = $_SESSION['user_id'];  

?>

<link rel="stylesheet" href="../public/adminNavigation.css">

<header>
    <nav class="navigation">
        <div class="logo">
            <img src="../public/slike/LOGO.png" alt="logo">
        </div>
        <div class="links">
            <ul class="menu">
                <li><a href="adminProducts.php" class="navLinks">Products</a></li>
                <li><a href="adminUsers.php" class="navLinks">Users</a></li>
                <li class="admin"><?php echo $korisnik ?></li>
                <li><button class="btn"><a href="../logout.php">Log out</a></button></li>
            </ul>
        </div>
    </nav>
</header>