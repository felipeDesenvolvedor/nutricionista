<?php
    $mysql = new mysqli(HOST, USER, PASS, DB);
    $mysql->set_charset('utf8');

    if ($mysql === false){
        echo 'erro de conexão';
    }
?>