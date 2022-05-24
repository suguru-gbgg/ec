<?php
    
    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "SELECT * FROM `items` WHERE id =" .$_GET['id'];
    $datas = $pdo -> query($sql);
    foreach($datas as $data){

        echo $data["item_name"];
        echo $data["item_contents"];
        echo $data["item_value"];

    }

?>