<?php

session_start();

require_once 'rb-mysql.php'; // подключаем скрипт

$host ='127.0.0.1';
$user ='root';
$password ='';
$database ='request';
$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));


//LOGIN
$login = trim($_POST["login"]);
if(isset($_POST["login"])) {
    if (!empty($login)) {
        $login = htmlspecialchars($login, ENT_QUOTES);
        $login = urldecode($login);
    }
}

//PASSWORD
$password = trim($_POST["password"]);
if(isset($_POST["password"]))
    if(!empty($password)) {
        $password = htmlspecialchars($password, ENT_QUOTES);
        $password = urldecode($password);
    }

if(isset($_POST["login"]) && isset($_POST['password'])) {

//Запрос в БД на выборке пользователя.
    $query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";

// выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка запроса на выборке пользователя из БД " . mysqli_error($link));
    $result_arr = mysqli_fetch_row($result);

    $login = $result_arr[0] ?? '';
    $password = $result_arr[1] ?? '';
    if ($login == $_POST["login"] && $password == $_POST["password"]) {
        echo "<script type='text/javascript'> alert( 'Пользователь успешно авторизован!' );</script>";
        $redirect_url = "/request/createrequest.php";
        header("HTTP/1.1 301 Moved Permanently");
        header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        sleep(1);

        // Если введенные данные совпадают с данными из базы, то сохраняем логин и пароль в массив сессий.
        $_SESSION['login_q'] = $login;
        $_SESSION['password_q'] = $password;
    } else{
        echo "<script type='text/javascript'> alert( 'Пользователь не авторизован!' );</script>";
        $redirect_url = "/request/index.html";
        header("HTTP/1.1 301 Moved Permanently");
        header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url);
        sleep(5);
        exit();
    }
}
