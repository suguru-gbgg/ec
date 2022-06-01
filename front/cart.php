<?php

    session_start();

    require "../server/cart.php";
    $cart = new cart;
    $item_name = $cart -> get_cart($_SESSION["login_user_name"]);
    
    $count = count($item_name);

    for($i=0;$i<$count;$i++){
    echo $item_name[$i]."</br>";
    }

?>