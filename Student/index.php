<?php
    session_start();
    if(!isset($_SESSION['status']) || !isset($_SESSION['maHS']) || $_SESSION['status'] !== 'login success'){
        header('Location: login.php');
        exit;
    }
    $page_title = 'Home';
    include("sidebar.php");
    include("header.php");
    include("home.php");
    include("footer.php");
?>

