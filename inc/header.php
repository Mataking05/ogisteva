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
                    <a href="about.php" class="nav-link">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a href="artists.php" class="nav-link">ARTISTS</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
            </ul>
            <div class="hamburger">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </nav>
    </header>