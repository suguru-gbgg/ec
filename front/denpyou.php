<?php

    session_start();

    require "../server/cart.php";
    require "../server/get_user.php";
    require "../server/get_value.php";

    $cart = new cart;
    $item_name = $cart -> get_cart($_SESSION["login_user_name"]);

    $count = count($item_name);

    for($i=0;$i<$count;$i++){
        echo $item_name[$i]."</br>";
    }

    $kojin = new kojinjouhou;
    $datas = $kojin -> kojinn();

    foreach($datas as $data){
        echo $data["name"]."</br>";
        echo $data["juusyo"]."</br>";
        echo $data["dennwa"]."</br>";
    }

    $value = new item_value;
    $oder_value = $value -> value();
    echo "合計".$oder_value."円";

?>