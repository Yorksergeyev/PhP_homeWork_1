<?php

require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
$id = $_GET['user'];

$sql_statement = "UPDATE feedback SET review = '0' WHERE id ='$id'";
if(DB::getdbconnect()->query($sql_statement)){
    echo "Неактивен!";
} else{
     echo "Хьюстон, у нас проблемы!";
}