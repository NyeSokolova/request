<?php
require_once 'rb-mysql.php'; // подключаем скрипт
// подключаемся к серверу

$host ='127.0.0.1';
$user ='root';
$password ='';
$database ='request';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

//var_dump($_POST['id']);

// Если была нажата удаления, удаляем запись

if(isset($_POST['id']) != null ) {
    $id = json_decode($_POST['id']);
    $del_remove= "UPDATE requests SET remove = '1'  WHERE id = '$id'";
    $result = mysqli_query($link, $del_remove) or die("Ошибка " . mysqli_error($link));
    exit();
}
