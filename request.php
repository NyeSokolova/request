<?php
require_once 'rb-mysql.php';
R::setup( 'mysql:host=127.0.0.1;dbname=request','root', '' );

if ( !R::testConnection() )
{
    exit ('Нет соединения с базой данных');
}
if (isset($_POST) && !empty($_POST))
{
    header('Content-Type: application/x-javascript; charset=utf8');
    $result=print_r($_POST);
    json_encode($_POST) ;
    $json=json_encode($_POST);
    var_dump(json_decode($json, true));

}
//_____
$requests = R::dispense('requests'); //передаем название таблицы users

//поле id можно не создавать, так как RedBeanPHP автоматически его создает с автоинкрементом
$requests->guest_name=($_POST['guest_name']);
$requests->visit_date=($_POST['visit_date']);
$requests->visit_time=($_POST['visit_time']);
$requests->guest_tel=($_POST['guest_tel']);
$requests->responsible_face=($_POST['responsible_face']);
$requests->responsible_phone=($_POST['responsible_phone']);
$requests->corps=($_POST['corps']);
$requests->floor=($_POST['floor']);
$requests->cabinet=($_POST['cabinet']);
$requests->comment=($_POST['comment']);
$id = R::store($requests); // сохраняем объект $request в таблице
var_dump($id);
$ref=$_SERVER['QUERY_STRING'];
if ($ref!='') $ref='?'.$ref;
$redirect_url="/request/rsrequest.php";
header('Status: 301 Moved Permanently');
header('Location: http://'.$_SERVER['HTTP_HOST'].$redirect_url ."?id=".$id );
////_____

R::close();

die();