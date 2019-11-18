<?php
    session_start();
    include_once('inc/include.php');

    if(isset($_SESSION['pseudo'])){
        header('Location: home.php');
        exit;
    }

    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        if($valid){

        }
    }
?>
<?php require('inc/head.php');?>
<?php include('inc/header.php');?>
<?php include('inc/navbar.php');?>
<?php include('inc/search.php');?>
<?php include('inc/content.php');?>
<?php require('inc/footer.php');?>