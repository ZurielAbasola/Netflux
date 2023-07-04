<?php
require_once("includes/header.php");

// Check if id is set.
// If not, exit.
if(!isset($_GET["id"])) { 
    exit("No ID passed into page");
}

$entityId = $_GET["id"];
$entity = new Entity($con, $entityId);

$preview = new PreviewProvider($con, $userLoggedIn);
echo $preview->createPreviewVideo($entity);
?>