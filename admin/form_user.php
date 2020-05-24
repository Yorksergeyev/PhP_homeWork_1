<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/config/info.config.php';
require $_SERVER['DOCUMENT_ROOT'].'/classes/Db.php';

$login = $_GET['login'];

$pattern_login = '/\w{3,100}/';
if(preg_match($pattern_login, $login)){
    $sql_check = "SELECT id FROM users here email = '$login'";
    $result = Db::getdbconnect()-> query($sql_check);
    if($result){
       echo "На ресурсе уже есть пользователь с таким именем";
    } else{
        $sql = "UPDATE users SET login = '$login'";
        if ($connect -> query($sql)){
            echo "<h1> Имя успешно изменено</h1> $back $back_timer";
            $_SESSION['login'] = $login;
        } else{
            echo "Произошло фиаско";
        }   
    }
}
