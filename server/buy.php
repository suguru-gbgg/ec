<?php

    session_start();

    kojin($_POST["name"],$_POST["jusyo"],$_POST["dennwa"],$_SESSION["login_user_name"]);

    function kojin($name,$jusyo,$dennwa,$login_user_name){

        $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
        $sql = "INSERT INTO `kojinnjyouhou`(`name`, `juusyo`, `dennwa`, `user_id`) VALUES ('".$name."','".$jusyo."','".$dennwa."','".$login_user_name."')";
        $pdo -> query($sql);

        header("Location: ../front/denpyou.php");
    }
?>