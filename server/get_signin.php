<?php

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "SELECT * FROM `users` WHERE user_id ='".$_GET['user_id']."'AND pass ='".$_GET['pass']."'";
    $datas = $pdo -> query($sql);
   
    foreach($datas as $data){   
    }

    if(isset($data["user_id"])){
        header('Location: http://localhost/work/ec/front/top_page.php');
    }else{
        header('Location: http://localhost/work/ec/front/erro_signin.php');
    }
    
?>