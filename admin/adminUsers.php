<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/adminUsers.css">
    <title>Guitar Store</title>
</head>
<body>
    <?php
    
        require_once('../inc/adminNavigation.php'); 
        $sql = "SELECT * FROM user WHERE user_id != :idUser";

        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam(':idUser', $idUser);
        $stmt -> execute();

        $users = $stmt -> fetchAll();

        foreach ($users as $count => $user) {
            $count++;

    ?>
        <div class="userBox">
            <div class="userId">
                <h3 class="headingUser">User Id</h3>
                <h3 class="dinamicItem"><?php echo $user['user_id'] ?></h3>
            </div>

            <div class="nameBox">
                <h3 class="headingUser">Name and Lastname</h3>
                <h3 class="dinamicItem"><?php echo $user['name'] ?></h3>
            </div>

            <div class="emailBox">
                <h3 class="headingUser">Email</h3>
                <h3 class="dinamicItem"><?php echo $user['email'] ?></h3>
            </div>


            <div class="actions">
                <?php 
                    if($user['is_active'] == 0) {
                ?>
                <button class="active"><a href="activate.php?status=1&user_id=<?php echo $user['user_id']?>">Activate</a></button>
                <?php 
                    }
                    if($user['is_active'] == 1) {
                ?>
                <button class="deactive"><a href="activate.php?status=0&user_id=<?php echo $user['user_id']?>">Deactivate</a></button>
                <?php 
                    }
                ?>
            </div>
        </div>
    <?php 
        }
    ?>
</body>
</html>