<?php

require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
$id = $_GET['user'];

$sql_statement = "UPDATE feedback SET review = '1' WHERE id ='$id'";
if(DB::getdbconnect()->query($sql_statement)){
    echo "Активен!";
} else{
     echo "Хьюстон, у нас проблемы!";
}