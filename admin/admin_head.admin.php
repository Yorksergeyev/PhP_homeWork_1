<?php

 echo("<!DOCTYPE html> <html lang='ru'>
<head>
    <meta charset='UTF-8'>
        <script src='codes.js' defer ></script>
       <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> {$title_info}</title>");
    echo("<link rel='stylesheet' href='http://");
    echo  $_SERVER['HTTP_HOST'] ;
    echo ("/css/bulma.min.css'>");
    echo "<script  src='http://";
    echo  $_SERVER['HTTP_HOST'] ;
    echo ("/js/admin.js' defer></script> </head><body> ");
