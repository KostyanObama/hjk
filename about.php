<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Petrunev ISP382</title>
    <link type="text/css" href="assets/style/style.css" rel="stylesheet">

    <style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 30%;
    
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>

</head>
<body>



    <div class="header">
        <a href="/petrunev/index.php" class="logo">Hot-Tour</a>
        <div class="header-left">
            <a href="/petrunev/index.php">Главная</a>
            <a href="tours.php">Туры</a>
            <a class="active" href="about.php">О нас</a>
        </div>
        <div class="header-right">
    <?php
        session_start();
        if(!isset($_SESSION['Login'])) {?>
            <a href="login.php">Авторизация/Регистрация</a>
            <?php } else {?>
                <a href="profile.php">Личный кабинет</a>   
                <a href="exit.php">Выход</a>
            <?php }
        session_write_close();
    ?>
        </div>
    </div><br>

    <H1 style="text-align: center">Контакты</H1>
    <h2>Адрес:</h2>
    <p>г. Омск, Степанца 48Б</p><br>
    <h2>Почта для связи:</h2>
    <p>tours55@mail.ru</p><br>
    <h2>График работы:</h2>
    <p>Понедельник-Воскресенье с 9:00 до 18:00</p><br>

</body>
</html>

