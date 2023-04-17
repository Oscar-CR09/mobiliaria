<?php

function conectarDB(): mysqli {
    $db = mysqli_connect('localhost','root','1989cero','bienesraices_crud');

    if(!$db) {
        echo "Error no connection " ;
        exit;

    }

    return $db;

}