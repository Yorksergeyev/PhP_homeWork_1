<?php

require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
$user_id = $_GET['user'];

$sql_statement = "UPDATE users SET role = 'ban' WHERE id ='$user_id'";
if(DB::getdbconnect()->query($sql_statement)){
    echo "Забанен!";
} else{
     echo "Хьюстон, у нас проблемы!";
}