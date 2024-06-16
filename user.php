<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Кабинет пользователя</title>
    <link rel="icon" href="img/favicon.ico">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
   <?php require_once "blocks/header/header.php" ?>

    <div class="feedback">
        <div class="container">
            <h2>Кабинет пользователя</h2>
            <p>Притвет: <?php echo $_COOKIE['login']?></p>

            <form method="post" action="/lib/add-game.php">
                <label>Изобрадение</label>
                <input type="text" class="one-line" name="image">

                   <label>Подписчики</label>
                <input type="text" class="one-line" name="followers">

                <button id='btn' type="submit">Добавить</button>
            </form>

        </div>
    </div>

    <?php require_once "blocks/footer/footer.php" ?>


</body>