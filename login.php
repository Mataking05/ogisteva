
<?php 
    $msg = "";
    if(isset($_GET['registracija'])){
        if($_GET['registracija'] == 1) {
            $msg = "Uspesno ste se registrovali. Ceka se aktivacija!";
        }
    }

    $error = "";

    if(isset($_GET['error'])){
        if($_GET['error'] == 1) {
            $error = "Niste uneli podatke za logovanje!";
        }

        if($_GET['error'] == 2) {
            $error = "Uneli ste pogresne podatke ili je vas nalog nepostojeci/neaktivan";
        }
    }
?>
<link rel="stylesheet" href="public/style_login.css">
<div class="container">

        <form action="loginAcction.php" method="post">
            <h2>Login</h2>
            <h4 class="greska"><?php echo $msg ?></h4>
            <h4 class="greska"><?php echo $error ?></h4>
            <div class="input-u">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" id="username">
            </div>
            <div class="input-u">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" id="password">
            </div>
            <button type="submit" class="btn_log">Login</button>
        </form>
        <a href="register.php">Register</a>
</div>


