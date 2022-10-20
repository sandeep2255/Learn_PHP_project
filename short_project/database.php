<?php

    define('DB_HOST', 'localhost:3307');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'Sandeep@1999');
    define('DB_NAME', 'test');

    # create connection

    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    # check connection

    // if($connection->connect_error){
    //     die('Connection failed' . $connection->connect_error);
    // }else{
    //     echo 'connected';
    // }
?>