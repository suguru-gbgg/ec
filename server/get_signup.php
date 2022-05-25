<?php

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "INSERT INTO `users`(`user_id`, `pass`) VALUES ('".$_GET['user_id']."','".$_GET['pass']."')";
    $pdo -> query($sql);
    header('Location: http://localhost/work/ec/front/signin.php');

?>