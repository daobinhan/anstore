<!DOCTYPE html>
<?php include_once('config/database.php'); ?>
<html>
    <head>
        <title> An Store &#128525 </title>
        <link rel="website icon" type="png"
              href="include/logoshop.png"/>
    </head>

    <?php
    /* f(!isset($_SESSION['admin'])){ header('location:login.php'); }

      else { */
    include_once('config/database.php');
    include_once('include/header.php');
    include_once('include/menu.php');
    include_once('controller/main.php');
    include_once('include/footer.php');
    ?>


