<?php

session_start();
require_once 'connect\connect.php';

//Получаем данные из запроса
$tour = $_POST["tour"];
$price = $_POST["price"];
$login = $_SESSION['Login'];

mysqli_query($connect, "INSERT INTO `orders` (`tour`, `price`, `user`) VALUES ('$tour', '$price', '$login')");


header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно





?>