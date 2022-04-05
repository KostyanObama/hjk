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

.btn3 {
    display: inline-block; 
    box-sizing: border-box;
    padding: 0 20px;
    margin: 0 15px 15px 0;
    outline: none;
    border: none; 
    border-radius: 4px;
    height: 32px;
    line-height: 32px;
    font-size: 14px;
    font-weight: 500;
    text-decoration: none;
    color: #fff;
    background-color: #3775dd;
    box-shadow: 0 2px #21487f;
    cursor: pointer;
    user-select: none;
    appearance: none;
    touch-action: manipulation; 
    vertical-align: top;
}
.btn3:hover {
    background-color: #002fed;
}
.btn3:active {
    background-color: #2f599e !important;
}
.btn3:focus-visible {
    box-shadow: 0 0 0 3px lightskyblue;
}
</style>

</head>
<body>



    <div class="header">
        <a href="/petrunev/index.php" class="logo">Hot-Tour</a>
        <div class="header-left">
            <a href="/petrunev/index.php">Главная</a>
            <a class="active" href="tours.php">Туры</a>
            <a href="about.php">О нас</a>
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
    <h1 style="text-align:center;">Туры по России</h1>
    <div class="wrap" >

        <div class="card">
            <img src="assets/img/r1.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>САНАТОРИЙ МАШУК</b></h4> 
                <p>Пятигорск, Минеральные воды</p>
                <form action="order.php" method="POST">
                    <button class="btn3">Забронировать</button>
                    <input type=hidden name="tour" value="САНАТОРИЙ МАШУК"></input>
                    <input type=hidden name="price" value="15000"></input>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/r2.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>ОТЕЛЬ ГАММА СИРИУС</b></h4> 
                <p>Россия, Сочи</p> 
                <form action="order.php" method="POST">
                    <button class="btn3">Забронировать</button>
                    <input type=hidden name="tour" value="ОТЕЛЬ ГАММА СИРИУС"></input>
                    <input type=hidden name="price" value="15000"></input>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/r3.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>ГРАНД САПФИР ОТЕЛЬ</b></h4> 
                <p>Россия, Анапа</p> 
                <form action="order.php" method="POST">
                    <button class="btn3">Забронировать</button>
                    <input type=hidden name="tour" value="ГРАНД САПФИР ОТЕЛЬ"></input>
                    <input type=hidden name="price" value="15000"></input>
                </form>
            </div>
        </div>
	</div><br><br><br>         
    <h1 style="text-align:center;">Туры в Турцию</h1>
    <div class="wrap" >

        <div class="card">
            <img src="assets/img/card_1.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>EFTALIA AQUA RESORT</b></h4> 
                <p>Турция, Марса Алам</p> 
                <form action="order.php" method="POST">
                    <button class="btn3">Забронировать</button>
                    <input type=hidden name="tour" value="EFTALIA AQUA RESORT"></input>
                    <input type=hidden name="price" value="15000"></input>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card_2.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>CHAMPION HOLIDAY VILLAGE</b></h4> 
                <p>Турция, Кемер</p> 
                <form action="order.php" method="POST">
                    <button class="btn3">Забронировать</button>
                    <input type=hidden name="tour" value=""></input>
                    <input type=hidden name="price" value="15000"></input>
                </form>
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card_3.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>KAMELYA SELIN HOTEL</b></h4> 
                <p>Турция, Хургада</p> 
                <form action="order.php" method="POST">
                    <button class="btn3">Забронировать</button>
                    <input type=hidden name="tour" value="CHAMPION HOLIDAY VILLAGE"></input>
                    <input type=hidden name="price" value="15000"></input>
                </form>
            </div>
        </div>
	</div>

</body>
</html>

