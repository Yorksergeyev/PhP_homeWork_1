<?php

require $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';
$id = $_GET['user'];

$sql_statement = "DELETE FROM feedback WHERE id = '$id'";
if(DB::getdbconnect()->query($sql_statement)){
    echo "Отзыв удален";
} else{
     echo "Во время удаления возникли проблемы";
}