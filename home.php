<?php
    session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: index.php');
    }
    var_dump($_SESSION);
    var_dump($_GET);
    require('inc/connect.php');


    include('inc/head.php');
    include('inc/header.php');
    include('inc/navbar.php');
    include('inc/search.php');
    include('inc/homeContent.php');
    include('inc/footer.php');
    require('inc/footer-scripts.php');


    ?>