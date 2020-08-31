<?php
require_once 'rb-mysql.php';
R::setup( 'mysql:host=127.0.0.1;dbname=request','root', '' );

if ( !R::testConnection() )
{
    exit ('Нет соединения с базой данных');
}

if (!empty($_POST['id__'])) {
    $id = $_POST['id__'];
    foreach ($_POST as $key=>$id)
    {
        if ($key != "id__") {echo $key." - > ".$id."<br>";}

        // очищаем результат
        mysqli_free_result($result);
        $ref=$_SERVER['QUERY_STRING'];
        if ($ref!='') $ref='?'.$ref;
        $redirect_url="/request/edit.php";
        header('Status: 301 Moved Permanently');
        header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url ."?id=".$id );
        exit();
    };

// очищаем результат
//    mysqli_free_result($result);
//    $ref=$_SERVER['QUERY_STRING'];
//    if ($ref!='') $ref='?'.$ref;
//    $redirect_url="/request/edit.php";
//    header('Status: 301 Moved Permanently');
//    header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url ."?id=".$id );
//    exit();
}



