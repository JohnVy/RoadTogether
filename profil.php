<?php
    session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: index.php');
    }
    if(!isset($_SESSION['login']) ) {
      header('Location: index.php');
    }
    require('inc/connect.php');


    include('inc/head.php');
    include('inc/navbar.php');
    include('inc/addAnnonce.php');
    include('inc/profilContent.php');
    include('inc/editAnnonce.php');
    include('inc/favorisAnnonce.php');
    include('inc/footer.php');
    require('inc/footer-scripts.php');


    ?>



