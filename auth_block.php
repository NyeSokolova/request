<?php
echo "
<div id='auth_block'>";
session_start();
//Проверяем авторизован ли пользователь
if(!isset($_SESSION['login_q']) && !isset($_SESSION['password_q'])){

    // если нет, то выводим на страницу авторизации
    $redirect_url = "/request/index.html";
    header("HTTP/1.1 301 Moved Permanently");
    header('Location: http://' . $_SERVER['HTTP_HOST'] . $redirect_url);

}else{

    //Если пользователь авторизован, то выводим ссылку Выход
    echo "
    <div id='link_logout'>
        <a href='logout.php' class='button'>Выйти</a>
    </div>";
    echo "<a class='logo' align='left'> ".$_SESSION['login_q'];
    echo " </a>";

}
echo "</div>";
