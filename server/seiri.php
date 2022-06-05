<?php

    session_start();

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "DELETE FROM `cart` WHERE user_id = '".$_SESSION['login_user_name']."'";
    $pdo -> query($sql);
    header("Location: http://localhost/work/ec/front/top_page.php");

?>