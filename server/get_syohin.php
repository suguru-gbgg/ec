<?php

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');

    $sql = "SELECT * FROM `items`";

    $datas = $pdo -> query($sql);

    foreach($datas as $data){

        echo $data["item_name"];
        echo $data["item_value"];

    }

?>