<?php
session_start();
$_SESSION["mail"];

if($_POST['redirect']){
         header("Location: add_book_html.php");
    }
    ?>
