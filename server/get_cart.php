<?php
    
    session_start();

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "INSERT INTO `cart`(`user_id`, `item_id`) VALUES ('".$_SESSION['login_user_name']."','".$_GET['id']."')";
    $pdo -> query($sql);
    header('Location: http://localhost/work/ec/front/cart.php');
?>