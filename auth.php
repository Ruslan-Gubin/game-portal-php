<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
   <?php require_once "blocks/header/header.php" ?>

    <div class="feedback">
        <div class="container">
            <h2>Авторизация</h2>
            <form method="post" action="/lib/auth.php">
                <div class="inline">
                    <div>
                      </div>
                      
                    </div>
                    <label>Логин</label>
                    <input type="text" name="login">
                    
                  
                    <label>Пароль</label>
                    <input type="password"  name="password">

                <button id='btn' type="submit">Авторизоватся</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer/footer.php" ?>


</body>



</html>