<?php
require_once 'rb-mysql.php'; // подключаем скрипт
// подключаемся к серверу

$host ='127.0.0.1';
$user ='root';
$password ='';
$database ='request';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));


if(isset($_POST['id']) != null ) {
    $id = json_decode($_POST['id']);
    $right= "UPDATE requests SET status = 'Согласовано' WHERE id = '$id'";
    $result = mysqli_query($link, $right) or die("Ошибка " . mysqli_error($link));
//    $redirect_url="/request/rsrequest.php";
//    header("HTTP/1.1 301 Moved Permanently");
//    header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);
    exit();
}
