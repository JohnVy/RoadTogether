<?php
    session_start();
    var_dump($_SESSION);
    require('inc/connect.php');


    include('inc/head.php');
    include('inc/header.php');
    include('inc/navbar.php');
    include('inc/search.php');
    include('inc/homeContent.php');
    include('inc/footer.php');
    require('inc/footer-scripts.php');

    ?>