<?php

    session_start();

    $pdo = new PDO('mysql:host=localhost;dbname=ec;','root','');
    $sql = "SELECT * FROM `cart` WHERE user_id ='".$_SESSION['login_user_name']."'";
    $datas = $pdo -> query($sql);

    $value = 0;
    foreach($datas as $data){
        $pdo1 = new PDO('mysql:host=localhost;dbname=ec;','root','');
        $sql1 = "SELECT * FROM `items` WHERE id = '".$data['item_id']."'";
        $items = $pdo1 -> query($sql1);
        foreach($items as $item){}
        echo $item["item_name"].":".$item["item_value"]."円</br>";
        $value =  $value + $item["item_value"];       
    }
    echo "合計金額:".$value."円";
?>
