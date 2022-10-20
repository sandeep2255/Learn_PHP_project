<?php
    session_start();

    session_destroy();
    header('Location:/myProjects/sample/login.php');
?>