

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registracija</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <div class="container">
        <form class="forma" action="registerAction.php" method="POST">
            <h2>Registracija</h2>

            <div class="input-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Register</button>
        </form>
    </div>
</body>
</html>

