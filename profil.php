<?php
    session_start();
    $emailOwner = $_SESSION['email'];
    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location: index.php');
    }
    if(!isset($_SESSION['login']) ) {
      header('Location: index.php');
    }
    require('inc/connect.php');
    $accountLink = true;


    include('inc/head.php');
    include('inc/navbar.php');
    include('inc/addAnnonce.php');
    include('inc/profilContent.php');
    include('inc/editAnnonce.php');
    include('inc/favorisAnnonce.php');
    include('inc/footer.php');
    require('inc/footer-scripts.php');

    ?>



