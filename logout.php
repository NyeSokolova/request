<?php
//Запускаем сессию
session_start();

unset($_SESSION["login_q"]);
unset($_SESSION["password_q"]);
//session_unset();
//session_destroy();

//Возвращаем пользователя на страницу авторизации
$redirect_url = "/request/index.html";
header("HTTP/1.1 301 Moved Permanently");
header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);