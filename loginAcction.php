<?php 
    if(isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        include 'app/config/config.php';

        $userName = $_POST['username'];
        $password = $_POST['password'];

        $aktivan = 1;

        $upit = $pdo -> prepare("SELECT * FROM user WHERE username = :userName AND password_hash = :password AND is_active = :aktivan");

        $upit -> bindParam(':userName', $userName);
        $upit -> bindParam(':password', $password);
        $upit -> bindParam(':aktivan', $aktivan);

        $upit -> execute();

        $result = $upit -> fetch(PDO::FETCH_ASSOC);

        if(!$result){
            header('Location: login.php?error=2');
            exit();
        } else {
            session_start();

            $_SESSION['user_id'] = $result['user_id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['uloga_id'] = $result['uloga_id'];

            if($_SESSION['uloga_id'] == 1) {
                header('Location: admin/admin.php');
                exit();
            }

            if($_SESSION['uloga_id'] == 2) {
                header('Location: index.php');
                exit();
            }
        
        }
    } else {
        header('Location: login.php?error=1');
        exit();
    }
?> 