<?php
session_start();
$_SESSION["mail"];

if($_POST['redirect']){
         header("Location: rent_html.php");
    }
    ?>
