<?
    include '../app/config/sessionChecker.php';
    include '../app/config/config.php';
?>
<header>
<nav class="navbar">
            <a href="index.php" class="nav-logo"><img class="nav-img" src="public/slike/LOGO1111.PNG" alt=logo></a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">HOME</a>
                </li>
            
                <li class="nav-item">
                    <a href="product.php" class="nav-link">PRODUCTS</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href="artists.php" class="nav-link">ARTISTS</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">Log out</a>
                </li>
                <a class="nav-btn" href="cart.php">
                    <div class="nav-btn-content"><p class="btn-text">Cart</p></div>
                </a>
            </ul>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
</header>