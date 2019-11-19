<?php
session_start();
include_once('inc/include.php');
	echo $_SESSION['id'];
?>
<?php
    $page = "home";
    require('inc/connect.php');
?>
<?php require('inc/head.php');?>
<?php include('inc/header.php');?>
<?php include('inc/navbar.php');?>
<?php include('inc/search.php');?>
<?php include('inc/content.php');?>
<?php require('inc/footer.php');?>