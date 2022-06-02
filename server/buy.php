<?php

    session_start();

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "INSERT INTO `kojinnjyouhou`(`name`, `juusyo`, `dennwa`, `user_id`) VALUES ('".$_POST['name']."','".$_POST['jusyo']."','".$_POST['dennwa']."','".$_SESSION['login_user_name']."')";
    $pdo -> query($sql);

    header("Location: ../front/denpyou.php");

?>