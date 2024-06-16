<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
   <?php require_once "blocks/header/header.php" ?>

    <div class="feedback">
        <div class="container">
            <h2>Registration</h2>
            <form method="post" action="/lib/req.php">
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input type="text" name="login">
                    </div>

                    <div>
                        <label>Name</label>
                        <input type="text" name="username">
                    </div>
                </div>

                <label>Email</label>
                <input type="email" class="one-line" name="email">

                   <label>Password</label>
                <input type="password" class="one-line" name="password">

                <button id='btn' type="submit">Login</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer/footer.php" ?>


</body>



</html>