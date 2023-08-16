<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/VideoProvider.php");

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>

<!DOCTYPE html>
<html> 
    <head>
        <title>Welcome to Netflux</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/44042a313c.js" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"></script>
    </head>
    <body>
        <div class="wrapper">

        <div class="topBar">

            <div class="logoContainer">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="Netflux">
                </a>
            </div>

            <ul class="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="shows.php">TV Shows</a></li>
                <li><a href="movies.php">Movies</a></li>
            </ul>
            
            <div class="rightItems">
                <a href="search.php">
                    <i class="fas fa-search"></i>
                </a>
                <a href="profile.php">
                    <i class="fas fa-user"></i>
                </a>
            </div>
        </div>