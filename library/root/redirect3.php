<?php
session_start();
$_SESSION["mail"];

if($_POST['redirect']){
         header("Location: return_html.php");
    }
    ?>